<?php

namespace humhub\modules\exampleBasic\controllers;

use humhub\modules\admin\components\Controller;
use humhub\modules\Starred\assets\Assets;

class AdminController extends Controller
{

    /**
     * Render admin only page
     *
     * @return string
     */
    public function actionIndex()
    {
        // Register the asset bundle for the star rating functionality
        Assets::register($this->getView());

        return $this->render('index');
    }

}
