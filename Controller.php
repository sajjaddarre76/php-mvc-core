<?php


namespace sajjaddarre76\phpmvc;


use sajjaddarre76\phpmvc\middlewares\BaseMiddleware;

class Controller
{
    public string $layout = 'main';
    public string $action = '';
    /**
     * @var BaseMiddleware
     */
    protected array $middlewares = [];
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function render($view, $params=[])
    {
        return Application::$app->view->renderView($view, $params);

    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;

    }

    /**
     * @return BaseMiddleware
     */
    public function getMiddlewares()
    {
        return $this->middlewares;
    }


}