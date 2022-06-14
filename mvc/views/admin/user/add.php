<div class="content-wrapper">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">ADD USER</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body">
            <form  method="post" enctype="multipart/form-data">
            <div class="form-group">
                    <label for="inputName">Ảnh sản phẩm</label>
                    <div class="input-group">
                      <div class="custom-file" >
                       <div>
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="img">
                            <label  class="custom-file-label" for="exampleInputFile">Hãy chọn file ảnh </label>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputName">User Name</label>
                    <input type="text" id="inputName" class="form-control" name="username">
                </div>
                <div class="form-group">
                    <label for="inputName">Password</label>
                    <input type="text" id="inputName" class="form-control" name="password">
                </div>
                <!-- <div class="form-group">
                    <label for="inputName">Level</label>
                    <input type="text" id="inputName" class="form-control" name="level">
                </div> -->
                <div style="padding-bottom: 20px;">
                    <label for="inputName">Cập nhập quyền :</label><br>
                    <select style="outline: none;
    border: 1px solid;
    width: 205px;
    height: 41px;"  id="inputName"  name="level">
                        <option value="1">Admin</option>
                        <option value="2">Staff</option>
                    </select>
                </div>
                <input   type="submit" value="Add User" name="addUser" class="btn_admin float-left px-5 py-3">
            </form>
        </div>

        <!-- /.card-body -->
    </div>
</div>