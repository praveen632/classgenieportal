<?php echo Html::script('/public/editor/ckeditor.js'); ?>

<?php echo Html::style('/public/editor/editor_gecko.css'); ?>

<?php $__env->startSection('content'); ?>
     <div class="row"><br>
        <div class="col-md-10 col-lg-offset-1">
            <div class="panel panel-default">
            <div class="panel-heading my_pannel"><span style="font-size:15px;">Edit Content&nbsp;&nbsp;</span><a class="btn btn-success search_btn-add" href="<?php echo url('/bloglist')?>">View Blog List</a></div>
            <div class="panel-body">
             <form class="conten" id="ckform" action="<?php echo e(url('blog/save')); ?>" method="POST">
               <?php echo csrf_field(); ?>

               <div class="form-group">        	  
                <br><label class="form-horizontal control-label">Page Title</label><input type="text" class="form-control"  value="" name="page_title" placeholder="title" id="pg_title">        
               </div>              
               <label class="form-horizontal control-label">Description</label>             
               <textarea name="editor1" id="editor1" rows="10" cols="80"></textarea>
                 <input type="hidden" value="" id="cont_id" name="id"></input>
                 <script>
                 CKEDITOR.replace( 'editor1' );
                 </script><br />
                 <center><button type="submit" class="btn btn-primary submit-new">Submit</button></center>
            </form>
      </div>
<?php $__env->stopSection(); ?>        
<?php $__env->startSection('footer'); ?>
<?php echo Html::script('/public/editor/styles.js'); ?>

<?php echo Html::script('/public/editor/config.js'); ?>

<?php $__env->stopSection(); ?>

  
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>