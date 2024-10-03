<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\bannerDesign;

class bannerDesignController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'bannerDesign';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $requestScheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $baseUrl = $requestScheme . '://' . $host;
        // echo $baseUrl;
        // dd("$baseUrl");

        $grid = new Grid(new bannerDesign());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));

        $grid->column('bigAreaBgImage', __('bigAreaBgImage'))->image($baseUrl.'/uploads/',75,75);
        $grid->column('smallAreaBgImage', __('smallAreaBgImage'))->image($baseUrl.'/uploads/',75,75);
      
        // $grid->column('bigAreaDesign', __('bigAreaDesign'));
        $grid->column('bigAreaDesign', __('Left Big Banner Design'))->display(function ($code) {
            return <<<HTML
             <div style="padding: 15px; border-radius: 5px;background-color: #f9f9f9; position: relative;"><div style="max-height: 150px; overflow-y: auto;">{$code}</div></div>
             HTML;
            })->style('min-width:20rem;');
            
        // $grid->column('smallAreaDesign', __('smallAreaDesign'));
        $grid->column('smallAreaDesign', __('Right Small Banner Design'))->display(function ($code) {
            return <<<HTML
             <div style="padding: 15px; border-radius: 5px;background-color: #f9f9f9; position: relative;"><div style="max-height: 150px; overflow-y: auto;">{$code}</div></div>
            HTML;
        })->style('min-width:20rem;');

        $grid->column('bigAreaOpacity', __('bigAreaOpacity'));
        $grid->column('smallAreaOpacity', __('smallAreaOpacity'));
        $grid->column('bigAreaColor', __('bigAreaColor'));
        $grid->column('smallAreaColor', __('smallAreaColor'));

        $grid->column('showBgImageInBigArea', __('showBgImageInBigArea'))->switch();
        $grid->column('showBgImageInSmallArea', __('showBgImageInSmallArea'))->switch();
        $grid->column('showContentInBigArea', __('showContentInBigArea'))->switch();
        $grid->column('showContentInSmallArea', __('showContentInSmallArea'))->switch();

        $grid->column('duraion', __('duraion'));
        $grid->column('showInSlide', __('showInSlide'))->switch();

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
        $requestScheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
        $host = $_SERVER['HTTP_HOST'];
        $baseUrl = $requestScheme . '://' . $host;
        // echo $baseUrl;
        // dd("$baseUrl");

        $show = new Show(bannerDesign::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('bigAreaBgImage', __('bigAreaBgImage'))->image($baseUrl.'/uploads/',75,75);
        $show->field('smallAreaBgImage', __('smallAreaBgImage'))->image($baseUrl.'/uploads/',75,75);
        $show->field('bigAreaDesign', __('bigAreaDesign'));
        $show->field('smallAreaDesign', __('smallAreaDesign'));

        $show->field('bigAreaOpacity', __('bigAreaOpacity'));
        $show->field('smallAreaOpacity', __('smallAreaOpacity'));
        $show->field('bigAreaColor', __('bigAreaColor'));
        $show->field('smallAreaColor', __('smallAreaColor'));

        $show->field('showBgImageInBigArea', __('showBgImageInBigArea'));
        $show->field('showBgImageInSmallArea', __('showBgImageInSmallArea'));
        $show->field('showContentInBigArea', __('showContentInBigArea'));
        $show->field('showContentInSmallArea', __('showContentInSmallArea'));

        $show->field('duraion', __('duraion'));
        $show->field('showInSlide', __('showInSlide'))->switch();

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
        $form = new Form(new bannerDesign());

        $form->text('title', __('Title'));
        $form->image('bigAreaBgImage', __('bigAreaBgImage'));
        $form->image('smallAreaBgImage', __('smallAreaBgImage'));
        
        $form->text('bigAreaOpacity', __('bigAreaOpacity'));
        $form->text('smallAreaOpacity', __('smallAreaOpacity'));
        $form->color('bigAreaColor', __('bigAreaColor'));
        $form->color('smallAreaColor', __('smallAreaColor'));

        $form->switch('showBgImageInBigArea', __('showBgImageInBigArea'));
        $form->switch('showBgImageInSmallArea', __('showBgImageInSmallArea'));
        $form->switch('showContentInBigArea', __('showContentInBigArea'));
        $form->switch('showContentInSmallArea', __('showContentInSmallArea'));

        $form->ckeditor('bigAreaDesign')->options(['lang' => 'en', 'height' => 100, 'allowedContent' => true, 'extraAllowedContent' => 'div[*];','contentsCss' => '/css/frontend-body-content.css']);

        $form->ckeditor('smallAreaDesign')->options(['lang' => 'en', 'height' => 100, 'allowedContent' => true, 'extraAllowedContent' => 'div[*];','contentsCss' => '/css/frontend-body-content.css']);
        $form->number('duraion', __('duraion'));
        $form->switch('showInSlide', __('showInSlide'));
        // $form->textarea('designCode', __('DesignCode'));
        

        return $form;
    }
}
