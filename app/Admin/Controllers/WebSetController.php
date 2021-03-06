<?php

namespace App\Admin\Controllers;

use App\Models\WebSetModel;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class WebSetController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('关于长艺');
            $content->description('管理');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('关于长艺');
            $content->description('修改');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('关于长艺');
            $content->description('创建');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(WebSetModel::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->phone('联系手机');
            $grid->contacter('联系人');
            $grid->address('联系地址');
            $grid->tel('联系电话');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(WebSetModel::class, function (Form $form) {
            $form->display('id', 'ID');
            $form->text('phone', '联系手机');
            $form->text('contacter', '联系人');
            $form->text('address', '联系地址');
            $form->text('tel', '联系电话');
            $form->editor('intro', '公司简介');

        });
    }
}
