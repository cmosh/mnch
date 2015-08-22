@extends('analytics')

@section('content')

 
  <body >

   

      <div class="wrapper">
            <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       

        <!-- Main content -->
      
         <div class="col-md-6">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Horizontal Form</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-10">
                        <input class="form-control" id="inputEmail3" placeholder="Email" type="email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-10">
                        <input class="form-control" id="inputPassword3" placeholder="Password" type="password">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Remember me
                          </label>
                        </div>
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-info pull-right">Sign in</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">General Elements</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form role="form">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Text</label>
                      <input class="form-control" placeholder="Enter ..." type="text">
                    </div>
                    <div class="form-group">
                      <label>Text Disabled</label>
                      <input class="form-control" placeholder="Enter ..." disabled="" type="text">
                    </div>

                    <!-- textarea -->
                    <div class="form-group">
                      <label>Textarea</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    <div class="form-group">
                      <label>Textarea Disabled</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..." disabled=""></textarea>
                    </div>

                    <!-- input states -->
                    <div class="form-group has-success">
                      <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with success</label>
                      <input class="form-control" id="inputSuccess" placeholder="Enter ..." type="text">
                    </div>
                    <div class="form-group has-warning">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with warning</label>
                      <input class="form-control" id="inputWarning" placeholder="Enter ..." type="text">
                    </div>
                    <div class="form-group has-error">
                      <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with error</label>
                      <input class="form-control" id="inputError" placeholder="Enter ..." type="text">
                    </div>

                    <!-- checkbox -->
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">
                          Checkbox 1
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox">
                          Checkbox 2
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input disabled="" type="checkbox">
                          Checkbox disabled
                        </label>
                      </div>
                    </div>

                    <!-- radio -->
                    <div class="form-group">
                      <div class="radio">
                        <label>
                          <input name="optionsRadios" id="optionsRadios1" value="option1" checked="" type="radio">
                          Option one is this and that—be sure to include why it's great
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input name="optionsRadios" id="optionsRadios2" value="option2" type="radio">
                          Option two can be something else and selecting it will deselect option one
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input name="optionsRadios" id="optionsRadios3" value="option3" disabled="" type="radio">
                          Option three is disabled
                        </label>
                      </div>
                    </div>

                    <!-- select -->
                    <div class="form-group">
                      <label>Select</label>
                      <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Select Disabled</label>
                      <select class="form-control" disabled="">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>

                    <!-- Select multiple-->
                    <div class="form-group">
                      <label>Select Multiple</label>
                      <select multiple="" class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Select Multiple Disabled</label>
                      <select multiple="" class="form-control" disabled="">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>

                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>

  

@endsection
