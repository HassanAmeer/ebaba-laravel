<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\designCodeList;

class designCodeListController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'designCodeList';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new designCodeList());

        $grid->column('id', __('Id'));
        $grid->column('titlle', __('Titlle'));
        // $grid->column('code', __('Code'));
        // $grid->column('code', __('Code'))->display(function ($code) {
        //     return $code;
        // });
        // })->copyable();
        
        $grid->column('code', __('Code'))->display(function ($code) {
            // Display the HTML directly
            return <<<HTML
                  <div style="border: 1px solid #ccc; padding: 10px; border-radius: 5px; background-color: #f9f9f9; margin-bottom: 10px; position: relative;">
            <div style="max-height: 150px; overflow-y: auto; white-space: pre-wrap;">{$code}</div>
            <button class="btn btn-sm btn-warning copy-btn text-dark" data-id="{$this->id}" style="scale:0.7; position: absolute; top: -10px; right: -10px; font-widght:bold;">Copy</button></div>
                <script>
                    document.querySelector('.copy-btn[data-id="{$this->id}"]').addEventListener('click', function() {
                        var textarea = document.createElement('textarea');
                        textarea.value = `$code`; 
                        document.body.appendChild(textarea);
                        textarea.select();
                        document.execCommand("copy");
                        document.body.removeChild(textarea);
                        alert('Copied HTML content!'); 
                    });
                </script>
            HTML;
        });
        
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('deleted_at', __('Deleted at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(designCodeList::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('titlle', __('Titlle'));
        $show->field('code', __('Code'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('deleted_at', __('Deleted at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new designCodeList());

        $form->text('titlle', __('Titlle'))->default('sale code');
        // $form->textarea('code', __('Code'));
        $form->ckeditor('code')->options(['lang' => 'en', 'height' => 100,'contentsCss' => '/css/frontend-body-content.css']);

        return $form;
    }
}
