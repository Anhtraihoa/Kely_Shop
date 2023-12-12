class controller {

    function ModelAdmin($model){
        require_once $_SERVER['DOCUMENT_ROOT'] . "/mvc/models/admin/".$model.".php";
        return new $model;
    }

    function ViewAdmin($view, $data = []){
        require_once $_SERVER['DOCUMENT_ROOT'] . "/mvc/views/admin/cpanel/".$view.".php";
    }

    function ModelClient($model){
        require_once $_SERVER['DOCUMENT_ROOT'] . "/mvc/models/client/".$model.".php";
        return new $model;
    }

    function ViewClient($view, $data = []){
        require_once $_SERVER['DOCUMENT_ROOT'] . "/mvc/views/client/cpanel/".$view.".php";
    }

    function ModelCommon($model){
        require_once $_SERVER['DOCUMENT_ROOT'] . "/mvc/models/common/".$model.".php";
        return new $model;
    }
}
