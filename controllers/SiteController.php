<?php

namespace app\controllers;

use app\components\CloudFlareVerify;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new ContactForm();

        return $this->render('index', [
            'model' => $model,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        if(Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();

            $cfVerified = CloudFlareVerify::verify($post['cf-turnstile-response']);

            if(!$cfVerified) {
                Yii::$app->session->setFlash('error', 'Verificación fallida. Por favor, inténtalo de nuevo.');
                
                return $this->redirect(Yii::$app->request->referrer);
            }

            $model = new ContactForm();
            
            $model->load($post);

            if(!$model->validate()) {
                Yii::$app->session->setFlash('error', 'Por favor, completa todos los campos requeridos.');

                return $this->redirect(Yii::$app->request->referrer);
            }

            if($model->send()) {
                Yii::$app->session->setFlash('success', 'Gracias por contactarnos. Nos pondremos en contacto contigo pronto.');
            } else {
                Yii::$app->session->setFlash('error', 'Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.');
            }

            return $this->redirect(Yii::$app->request->referrer);
        }

        return $this->redirect('/');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
