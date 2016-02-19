<?php
namespace backend\controllers;

use Yii;
//use yii\filters\RateLimiter;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use common\models\User;
use common\models\logList;
use yii\filters\VerbFilter;
use yii\behaviors\TimestampBehavior;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            /* Включаем лимитирование запросов для админ-части*/
            //'rateLimiter' => [
            //   'class' => RateLimiter::className(),
            //],
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login'],
                        'allow' => true,
                    ],    
                    [
                        'actions' => ['error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'profile', 'calendar'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionUser()
    {
        return $this->render('user/index');
    }

    public function actionProfile()
    {
        return $this->render('profile');
    }

    public function actionCalendar()
    {
        return $this->render('calendar');
    }

    public function actionLogin()
    {
        
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $this->layout = '//main-login';
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {            
            //$logValue = new LogList();
            //$logValue->user = Yii::$app->user->identity->username;
            //$logValue->action_description = "User log in";            
            //$logValue->save();
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();        
        return $this->goHome();
    }
    
}
