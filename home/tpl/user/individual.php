<section class="section">
    <div class="container">
        <div class="paper">
            <div class="paper-header">
                设置
            </div>
            <div class="paper-body" style="min-height: 500px;">
                <div class="row">
                    <?php include __DIR__."/left_menu.php";?>
                    <div class="col-lg-10">
                        <div class="upload">
                            <div class="d-table-cell">
                                <form action="/home/index.php?m=user&a=_upload_user_touxiang" method="post" enctype="multipart/form-data">
                                    <div class="form-group text-center">
                                        <div>
                                            <img class="upload-img" src="<?php echo strstr($username['pic'], '../r'); ?>" alt="">
                                        </div>
                                        <label class="upload-btn" role="button">
                                            <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
                                            上传头像
                                            <input type="file" name="pic" value="" hidden>
                                        </label>
                                        <button type="submit" class="btn btn-success btn-sm">更改头像</button>
                                    </div>
                                </form>
                            </div>
                            <div class="d-table-cell vertical-top" style="padding-left: 1rem;width: 300px">
                                <h4>当前我的头像</h4>
                                <p>如果您还没有设置自己的头像，系统会显示为默认头像，您需要自己上传个性照片来作为自己的个人头像</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>