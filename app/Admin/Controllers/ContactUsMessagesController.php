<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\ContactUsMessages;

class ContactUsMessagesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ContactUsMessages';




    protected $baseUrl;

     public function __construct()
     {
         $requestScheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : 'http';
         $host = $_SERVER['HTTP_HOST'];
         $this->baseUrl = $requestScheme . '://' . $host;
     }
 



    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ContactUsMessages());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('name', __('Name'));
        $grid->column('phone', __('Phone'));
        $grid->column('image', __('Image'))->image($this->baseUrl.'/uploads/',75,75);
        $grid->column('description', __('Description'));
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
        $show = new Show(ContactUsMessages::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('name', __('Name'));
        $show->field('phone', __('Phone'));
        $show->field('image', __('Image'))->image($this->baseUrl.'/uploads/',75,75);;
        $show->field('description', __('Description'));
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
        $form = new Form(new ContactUsMessages());

        $form->text('title', __('Title'))->default('Need Help');
        $form->text('name', __('Name'));
        $form->phonenumber('phone', __('Phone'))->default('+92 30');
        $form->image('image', __('Image'));
        $form->text('description', __('Description'));

        return $form;
    }
}
