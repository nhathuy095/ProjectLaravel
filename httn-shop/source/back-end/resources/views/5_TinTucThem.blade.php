<div class="agile-grids">
    <!-- input-forms -->
    <div class="grids">
        <div class="progressbar-heading grids-heading">
            <h2>Thêm Tin Tức</h2>
        </div>
        <div class="panel panel-widget forms-panel w3-last-form">
            <div class="forms">
                <div class="form-three widget-shadow">
                    <div class=" panel-body-inputin">
                        <form class="form-horizontal" action="{{url("/")}}/tin-tuc/them" method="post">
						<input type="hidden" id='token' name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label class="col-md-2 control-label">Tên tin tức</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                        </span>
                                        <input type="text" name="name" class="form-control1" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <p class="help-block">{!! $errors->first('name') !!}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">SEO title</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                        </span>
                                        <input type="text" name="seotitle" class="form-control1" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <p class="help-block">{!! $errors->first('seotitle') !!}</p>
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-md-2 control-label">SEO keywords </label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                        </span>
                                        <input type="text" name="seokeywords" class="form-control1" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <p class="help-block">{!! $errors->first('seokeywords') !!}</p>
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-md-2 control-label">SEO description</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                        </span>
                                        <input type="text" name="seodescription" class="form-control1" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <p class="help-block">{!! $errors->first('seodescription') !!}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Nội dung</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span>                      
                                        </span>
                                         <textarea name="content" rows="4" cols="100"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <p class="help-block"></p>
                                </div>
                            </div>
							<div class="form-group">
                                <label class="col-md-2 control-label">Hình đại diện</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-picture-o"></i>
                                        </span>
                                        <input type="file" name="files" class="form-control1">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Danh mục tin tức</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                        </span>
										@if(isset($list_catalog))
                                        <select name="catalog">
											<option value="">-- Chọn danh mục --</option>
											@foreach($list_catalog as $item)
											<option value="{{ $item->idCatalog }}">{{ $item->nameCatalog 	 }}</option>
											@endforeach
										</select>		
										@endif
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <p class="help-block">{!! $errors->first('catalog') !!}</p>
                                </div>
                            </div>
                            
							<div class="form-group">
                                <label class="col-md-2 control-label">Warranty</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">   
                                        </span>
										<input type="text" name="warranty" class="form-control1" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <p class="help-block"></p>
                                </div>
                            </div>
							
							<div class="form-group">
                                <label class="col-md-2 control-label">Tags</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                        </span>
                                        <input type="text" name="tags" class="form-control1" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8"></div>
                                <div class="col-md-4">
                                    <ul class="bt-list">
                                        <li>
											<input type="reset" name="reset" value="Quay lại" class="hvr-icon-up col-4">
											
										</li>
                                        <li><input type="submit" name="submit" value="Lưu lại" class="hvr-icon-up col-4"></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //input-forms -->
</div>