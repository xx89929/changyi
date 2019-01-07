<?php
/**
 * Created by PhpStorm.
 * User: zhumingzhen
 * Email: z@it1.me
 * Date: 2018/5/10
 * Time: 22:44
 */
namespace App\Admin\Extensions\Form;
use Encore\Admin\Form\Field;

/**
 * 百度编辑器
 * Class uEditor
 * @package App\Admin\Extensions\Form
 */
class uEditor extends Field
{
    // 定义视图
    protected $view = 'admin.uEditor';

    // css资源
    protected static $css = [];

    // js资源
    protected static $js = [
        '/laravel-u-editor/ueditor.config.js',
        '/laravel-u-editor/ueditor.all.js',
        '/laravel-u-editor/lang/zh-cn/zh-cn.js'
    ];
//更改视频回编问题 /laravel-u-editor/ueditor.config.js inputXssFilter:true 改为 inputXssFilter:false 第361行
    public function render()
    {
        $this->script = <<<EOT
        //解决第二次进入加载不出来的问题
        UE.delEditor("{$this->id}");
        // 默认id是ueditor
        var ue = UE.getEditor('{$this->id}', {
            
            elementPathEnabled: true,
            enableContextMenu: false,
            autoClearEmptyNode: true,
            wordCount: false,
            imagePopup: false,
            inputXssFilter:false,
            autotypeset: {indent: true, imageBlockLine: 'center'}
        }); 
        ue.ready(function () {
            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');
        });

EOT;
        return parent::render();
    }
}