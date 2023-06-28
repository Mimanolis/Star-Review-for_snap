<?php

namespace humhub\modules\Starred\controllers;

use humhub\modules\content\components\ContentContainerController;

class StarredController extends ContentContainerController
{

    /**
     * Renders the index view for the "Starred" module
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}
