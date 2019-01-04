<?php

namespace App\Admin\Controllers;

use App\Models\SeoTabelModel;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class SeoTabelController extends Controller
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

            $content->header('seo管理');
            $content->description('首页');

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

            $content->header('seo管理');
            $content->description('编辑');

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

            $content->header('seo管理');
            $content->description('录入');

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
        return Admin::grid(SeoTabelModel::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->titleseo('标题');
            $grid->keywords('关键字');
            $grid->description('注明');
            $grid->imgseo('图片alt');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(SeoTabelModel::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('titleseo','标题');
            $form->text('keywords','关键字');
            $form->text('description','注明');
            $form->text('imgseo','图片alt');
        });
    }
}
