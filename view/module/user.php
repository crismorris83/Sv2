
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="fa fa-user">
        User
        <small>the future its now old man</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-user"></i> Home</a></li>
        <li><a href="#">User</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>

        <form method="post" id="formUsuario">
            <div class="box-body">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="input-group">
                        <span class="input-group-addon">Name</span>
                        <input type="text" class="form-control" id="txtName" name="txtName">
                        <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                    </div>

                    </div>
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="input-group">
                        <span class="input-group-addon">Last Name</span>
                        <input type="text" class="form-control" id="txtLName" name="txtLName">
                        <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                    </div>

                    </div>
                    
                    
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-6">
                    
                    </div>
                    
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="input-group">
                        <span class="input-group-addon" style="padding-right: 20px;">User</i></span>
                        <input type="text" class="form-control" id="txtUser" name="txtUser">
                        <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                    </div>

                    </div>
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="input-group">
                        <span class="input-group-addon" style="padding-right: 18px;">Password</i></span>
                        <input type="text" class="form-control" id="txtPWord" name="txtPWord">
                        <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                    </div>
                    </div>
                    
                    
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                    
                    </div>
                    
                </div>
                <!-- /.row -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                <button class="btn btn-app"  onclick="validate(event)">
                  <i class="fa fa-save"></i> guardar
                </button>
                <button class="btn btn-app"  onclick="getGenerarReporte(event)">
                  <i class="fa fa-print"></i> guardar
                </button>
                </div>
                <!-- /.box-footer-->
        </form>
        <?php

        if (isset($_POST["txtName"])) {
          
          $objCtrlUser = new UserController();
          $objCtrlUser -> setInsertUser(
            $_POST["txtName"],
            $_POST["txtLName"],
            $_POST["txtUser"],
            $_POST["txtPWord"]
          );
        }

        ?>
      </div>
      <!-- /.box -->

           <!-- Default box -->
           <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <table id="users" class="table table-dark table-striped table-hover">
            <thead>
              <tr>
                <input type="hidden" name="txtCodigo" id="txtCodigo">
                <th class="text-center">Code</th>
                <th class="text-center">Name</th>
                <th class="text-center">Last Name</th>
                <th class="text-center">User</th>
                <th class="text-center">Password</th>
                <th class="text-center">actions</th>
              </tr>
            </thead>
            <tbody>
              <form method="post">
                <?php
                  
                  $objCtrlUserAll = new UserController();
                  $objCtrlUserAll -> getSearchAllUser();
                  if (gettype($objCtrlUserAll -> getSearchAllUser()) == "boolean"){
                  print '    
                  <td colspan="5">no hay datos por mostrar</td>';
                  }else{

                    foreach($objCtrlUserAll -> getSearchAllUser() as $key => $value){
                      print '    
                        <tr>
                          <td>'.$value['CODE'].'</td>
                          <td>'.$value['NAME'].'</td>
                          <td>'.$value['LASTNAME'].'</td>
                          <td>'.$value['USER'].'</td>
                          <td>'.$value['PASSWORD'].'</td>
                          <td class="text-center">
                            <button class="btn btn-social-icon bg-yellow" onclick="getData(this.parentElement.parentElement)" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                              <i class="fa fa-edit"></i>
                            </button>
                            <button class="btn btn-social-icon btn-google" onClick="erase(this.parentElement.parentElement)">
                              <i class="fa fa-trash"></i>
                            </button>
                          </td>
                        </tr>
                        ';
                    }
                  
                  }
                  
                ?>
            </form>
            <?php
             if(isset($_POST['txtCodigo'])){
              $objCtrlUser = new UserController();
              $objCtrlUser -> eraseUser();}
            ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
        
      </div>
      <!-- /.box -->

           <!-- Default box -->
           <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
  
        <!-- /.box-body -->
        
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">editame esta</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form method="post" id="formUsuarioM">
        <input type="hidden" id="txtCode" name="txtCode">
            <div class="box-body">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="input-group">
                        <span class="input-group-addon">Name</span>
                        <input type="text" class="form-control" id="txtNameM" name="txtNameM">
                        <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                    </div>

                    </div>
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="input-group">
                        <span class="input-group-addon">Last Name</span>
                        <input type="text" class="form-control" id="txtLNameM" name="txtLNameM">
                        <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                    </div>

                    </div>
                    
                    
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-6">
                    
                    </div>
                    
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="input-group">
                        <span class="input-group-addon" style="padding-right: 20px;">User</i></span>
                        <input type="text" class="form-control" id="txtUserM" name="txtUserM">
                        <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                    </div>

                    </div>
                    <!-- ./col -->
                    <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="input-group">
                        <span class="input-group-addon" style="padding-right: 18px;">Password</i></span>
                        <input type="text" class="form-control" id="txtPWordM" name="txtPWordM">
                        <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                    </div>
                    </div>
                    
                    
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                    
                    </div>
                    
                </div>
                <!-- /.row -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                
                </div>
                <!-- /.box-footer-->
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button class="btn btn-app" style='float: left;'  onclick="validateM(event)">
          <i class="fa fa-save"></i> guardar
        </button>
        <?php
          if (isset($_POST["txtNameM"])) {
            
            $objCtrlUser = new UserController();
            $objCtrlUser -> setUpdateUser(
              $_POST["txtCode"],
              $_POST["txtNameM"],
              $_POST["txtLNameM"],
              $_POST["txtUserM"],
              $_POST["txtPWordM"]
            );
          }
        ?>
        <button type="button" style='float: right;' class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>