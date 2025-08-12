<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\KnowledgeBase;
use Yii;

class KnowledgeController extends Controller
{
    public function actionIndex($theme = null, $subtheme = null)
    {
        $this->layout = false;
        $kb = new KnowledgeBase();
        $themes = $kb->getThemes();

        if ($theme === null) {
            $theme = array_key_first($themes);
        }
        $subthemes = $kb->getSubthemes($theme);
        if ($subtheme === null) {
            $subtheme = array_key_first($subthemes);
        }
        $content = $kb->getContent($theme, $subtheme);

        return $this->render('index', [
            'themes' => $themes,
            'theme' => $theme,
            'subthemes' => $subthemes,
            'subtheme' => $subtheme,
            'content' => $content,
        ]);
    }

    public function actionData()
    {
        $this->layout = false;
        $theme = Yii::$app->request->post('theme');
        $subtheme = Yii::$app->request->post('subtheme');
        $kb = new KnowledgeBase();
        $themes = $kb->getThemes();
        if (!$theme) {
            $theme = array_key_first($themes);
        }
        $subthemes = $kb->getSubthemes($theme);
        if (!$subtheme) {
            $subtheme = array_key_first($subthemes);
        }
        $content = $kb->getContent($theme, $subtheme);
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return [
            'themes' => $themes,
            'theme' => $theme,
            'subthemes' => $subthemes,
            'subtheme' => $subtheme,
            'content' => $content,
        ];
    }
}
