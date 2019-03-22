<div id="api_main_home"><br/></div> 
    <h5>Main - Home</h5>
    <div class="card mb-3">
    <div class="card-header">POST &nbsp;&nbsp;  api/v1/home</div>
      <?php echo Form::Open(['url'=>'api/v1/home']); ?>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
               <thead>
                  <td style="width:20%;font-weight:bold">PARAMETER</td>
                  <td style="width:15%;font-weight:bold">TYPE</td>
                  <td style="width:45%;font-weight:bold">DESCRIPTION</td>
                  <td style="width:20%;font-weight:bold">VALUE</td>
                </thead>
                 <tr>
                   <td>page</td>
                   <td>int</td>
                   <td><xmp><input type="text" name="page" value="1"></xmp></td>
                   <td><input type="text" name="page" value="1"></td>
                 </tr>
               </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
            <input type="submit" class="btn btn-info" style="cursor:pointer" value="Submit">
          </div>
      <?php echo Form::Close(); ?>

  </div>


<div id="api_main_details"><br/></div> 
    <h5>Main - Details</h5>
    <div class="card mb-3">
    <div class="card-header">POST &nbsp;&nbsp;  api/v1/details</div>
      <?php echo Form::Open(['url'=>'api/v1/details']); ?>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
               <thead>
                  <td style="width:20%;font-weight:bold">PARAMETER</td>
                  <td style="width:15%;font-weight:bold">TYPE</td>
                  <td style="width:45%;font-weight:bold">DESCRIPTION</td>
                  <td style="width:20%;font-weight:bold">VALUE</td>
                </thead>
                 <tr>
                   <td>post_id</td>
                   <td>int</td>
                   <td><xmp><input type="text" name="post_id"></xmp></td>
                   <td><input type="text" name="post_id"></td>
                 </tr>
               </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
            <input type="submit" class="btn btn-info" style="cursor:pointer" value="Submit">
          </div>
      <?php echo Form::Close(); ?>

  </div>


<div style="display: none">
<div id="api_main_comments"><br/></div> 
    <h5>Main - Comments</h5>
    <div class="card mb-3">
    <div class="card-header">POST &nbsp;&nbsp;  api/v1/comments</div>
      <?php echo Form::Open(['url'=>'api/v1/comments']); ?>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
               <thead>
                  <td style="width:20%;font-weight:bold">PARAMETER</td>
                  <td style="width:15%;font-weight:bold">TYPE</td>
                  <td style="width:45%;font-weight:bold">DESCRIPTION</td>
                  <td style="width:20%;font-weight:bold">VALUE</td>
                </thead>
                 <tr>
                   <td>post_id</td>
                   <td>int</td>
                   <td><xmp><input type="text" name="post_id"></xmp></td>
                   <td><input type="text" name="post_id"></td>
                 </tr>
                 <tr>
                   <td>comment <i style="color:red">*</i></td>
                   <td>string</td>
                   <td><xmp><input type="text" name="comment"></xmp></td>
                   <td><input type="text" name="comment"></td>
                 </tr>
                 <tr>
                   <td>name <i style="color:red">*</i></td>
                   <td>string</td>
                   <td><xmp><input type="text" name="name"></xmp></td>
                   <td><input type="text" name="name"></td>
                 </tr>
                 <tr>
                   <td>email <i style="color:red">*</i></td>
                   <td>string</td>
                   <td><xmp><input type="text" name="email"></xmp></td>
                   <td><input type="text" name="email"></td>
                 </tr>
                 <tr>
                   <td>website</td>
                   <td>string</td>
                   <td><xmp><input type="text" name="website"></xmp></td>
                   <td><input type="text" name="website"></td>
                 </tr>
               </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
            <input type="submit" class="btn btn-info" style="cursor:pointer" value="Submit">
          </div>
      <?php echo Form::Close(); ?>

  </div>
</div>


<div id="api_main_allcategories"><br/></div> 
    <h5>Main - All Categories</h5>
    <div class="card mb-3">
    <div class="card-header">POST &nbsp;&nbsp;  api/v1/allCategories</div>
      <?php echo Form::Open(['url'=>'api/v1/allCategories']); ?>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
               <thead>
                  <td style="width:20%;font-weight:bold">PARAMETER</td>
                  <td style="width:15%;font-weight:bold">TYPE</td>
                  <td style="width:45%;font-weight:bold">DESCRIPTION</td>
                  <td style="width:20%;font-weight:bold">VALUE</td>
                </thead>
                 <tr>
                   <td colspan="4"><center>No Parameter required.</center></td>
                 </tr>
               </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
            <input type="submit" class="btn btn-info" style="cursor:pointer" value="Submit">
          </div>
      <?php echo Form::Close(); ?>

  </div>

<div id="api_main_category"><br/></div> 
    <h5>Main - Category</h5>
    <div class="card mb-3">
    <div class="card-header">POST &nbsp;&nbsp;  api/v1/category</div>
      <?php echo Form::Open(['url'=>'api/v1/category']); ?>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
               <thead>
                  <td style="width:20%;font-weight:bold">PARAMETER</td>
                  <td style="width:15%;font-weight:bold">TYPE</td>
                  <td style="width:45%;font-weight:bold">DESCRIPTION</td>
                  <td style="width:20%;font-weight:bold">VALUE</td>
                </thead>
                 <tr>
                   <td>category_id</td>
                   <td>int</td>
                   <td><xmp><input type="text" name="category_id"></xmp></td>
                   <td><input type="text" name="category_id"></td>
                 </tr>
                 <tr>
                   <td>page</td>
                   <td>int</td>
                   <td><xmp><input type="text" name="page" value="1"></xmp></td>
                   <td><input type="text" name="page" value="1"></td>
                 </tr>
               </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
            <input type="submit" class="btn btn-info" style="cursor:pointer" value="Submit">
          </div>
      <?php echo Form::Close(); ?>

  </div>



<div id="api_main_search"><br/></div> 
    <h5>Main - Search</h5>
    <div class="card mb-3">
    <div class="card-header">POST &nbsp;&nbsp;  api/v1/search</div>
      <?php echo Form::Open(['url'=>'api/v1/search']); ?>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
               <thead>
                  <td style="width:20%;font-weight:bold">PARAMETER</td>
                  <td style="width:15%;font-weight:bold">TYPE</td>
                  <td style="width:45%;font-weight:bold">DESCRIPTION</td>
                  <td style="width:20%;font-weight:bold">VALUE</td>
                </thead>
                 <tr>
                   <td>search</td>
                   <td>string</td>
                   <td><xmp><input type="text" name="search"></xmp></td>
                   <td><input type="text" name="search"></td>
                 </tr>
                 <tr>
                   <td>page</td>
                   <td>int</td>
                   <td><xmp><input type="text" name="page" value="1"></xmp></td>
                   <td><input type="text" name="page" value="1"></td>
                 </tr>
               </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
            <input type="submit" class="btn btn-info" style="cursor:pointer" value="Submit">
          </div>
      <?php echo Form::Close(); ?>

  </div>




<div id="api_main_urgent"><br/></div> 
    <h5>Main - Urgent News</h5>
    <div class="card mb-3">
    <div class="card-header">POST &nbsp;&nbsp;  api/v1/urgent</div>
      <?php echo Form::Open(['url'=>'api/v1/urgent']); ?>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
               <thead>
                  <td style="width:20%;font-weight:bold">PARAMETER</td>
                  <td style="width:15%;font-weight:bold">TYPE</td>
                  <td style="width:45%;font-weight:bold">DESCRIPTION</td>
                  <td style="width:20%;font-weight:bold">VALUE</td>
                </thead>
                 <tr>
                   <td>page</td>
                   <td>int</td>
                   <td><xmp><input type="text" name="page" value="1"></xmp></td>
                   <td><input type="text" name="page" value="1"></td>
                 </tr>
               </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
            <input type="submit" class="btn btn-info" style="cursor:pointer" value="Submit">
          </div>
      <?php echo Form::Close(); ?>

  </div>



<div id="api_main_topics"><br/></div> 
    <h5>Main - Topics may interest you</h5>
    <div class="card mb-3">
    <div class="card-header">POST &nbsp;&nbsp;  api/v1/topics</div>
      <?php echo Form::Open(['url'=>'api/v1/topics']); ?>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
               <thead>
                  <td style="width:20%;font-weight:bold">PARAMETER</td>
                  <td style="width:15%;font-weight:bold">TYPE</td>
                  <td style="width:45%;font-weight:bold">DESCRIPTION</td>
                  <td style="width:20%;font-weight:bold">VALUE</td>
                </thead>
                 <tr>
                   <td>page</td>
                   <td>int</td>
                   <td><xmp><input type="text" name="page" value="1"></xmp></td>
                   <td><input type="text" name="page" value="1"></td>
                 </tr>
               </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
            <input type="submit" class="btn btn-info" style="cursor:pointer" value="Submit">
          </div>
      <?php echo Form::Close(); ?>

  </div>
<?php /* /Users/apple/Sites/dev/RestApi_Task/resources/views/api/sections/home.blade.php */ ?>