<?php

namespace App\Admin\Controllers;

use App\Models\CaseModel;

use App\Models\CaseTypeModel;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class CaseController extends Controller
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

            $content->header('案例');
            $content->description('案例列表');

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

            $content->header('案例');
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

            $content->header('案例');
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
        return Admin::grid(CaseModel::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->case_title('案例名称');
            $grid->case_des('案例描述');
            $grid->case_img('案例图片')->image('',50,50);
            $grid->snsCaseType()->type_name('案例分类');
            $grid->author('案例发布者');

            $grid->created_at('创建时间');
            $grid->updated_at('更新时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(CaseModel::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->image('case_img','案例图片')->uniqueName()->move('case')->resize(360,350);
            $form->text('case_title','案例标题');
            $form->text('case_des','案例描述');
            $form->select('case_type','案例分类')->options(function(){
                return CaseTypeModel::all()->pluck('type_name','id');
            });
            $form->text('author','案例发布者')->default('海南长艺广告有限公司');
            $form->editor('case_content','案例内容');


            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
