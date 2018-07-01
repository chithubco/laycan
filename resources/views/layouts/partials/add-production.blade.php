<div class="row">
  <ul class="nav nav-pills" role="tablist">
  <li role="presentation"><a href="#">Open Liftings <span class="badge">42</span></a></li>
  <li role="presentation"><a href="#">Pending Permits <span class="badge">7</span></a></li>
  <li role="presentation"><a href="#">Out Standing NXP <span class="badge">3</span></a></li>
  <li role="presentation"><a href="#">Pending Demurrage Claims <span class="badge">7</span></a></li>
  <li role="presentation"><a href="#">At Risk Permits<span class="badge bg-danger">1</span></a></li>
</ul>
</div>

<div class="row">
  <div class="col-md-6">
      <div id="chart-container"></div>
  </div>
  <div class="col-md-6">
      <div id="chartContainer"></div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
      <div class="list-group">
        <a href="#" class="list-group-item active">
          Export Management
        </a>
        <a href="{{ route('export.index') }}" class="list-group-item"><span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span>Export Records</a>
        <a data-toggle="modal" href="#addExportModal" class="list-group-item"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Export</a>
        <a href="#" class="list-group-item">Export Performance Map</a>
        <a href="#" class="list-group-item" data-toggle="modal" data-target="#addTerminalModal"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Terminal</a>
      </div>
  </div>
  <div class="col-md-6">
    <div class="list-group">
        <a href="#" class="list-group-item active">
          Document Management
        </a>
        <a href="{{ route('upload.index') }}" class="list-group-item"><span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span> Documents Record</a>
        <a href="#" class="list-group-item" data-toggle="modal" data-target="#addUploadDocumentModal"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Document</a>
        <a href="#" class="list-group-item" data-toggle="modal" data-target="#addCargotype"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Document Category</a>
        <a href="#" class="list-group-item" data-toggle="modal" data-target="#addDocumentTemplateModal"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Document Template</a>
        <a href="{{ route('doctemplate.index') }}" class="list-group-item"><span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span>Document Template</a>
      </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
      <div class="list-group">
        <a href="#" class="list-group-item active">
          Reports Management Quick Access
        </a>
        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Production Data</a>
        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Daily Report</a>
        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Send Daily Report</a>
        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Send COMD Report</a>
      </div>
  </div>
  <div class="col-md-6">
    <div class="list-group">
        <a href="#" class="list-group-item active">
          Communication Management
        </a>
        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-open-file" aria-hidden="true"></span> Nomination Letter</a>
        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-open-file" aria-hidden="true"></span> Outtrn Verification Letter</a>
        <a href="#" class="list-group-item"><span class="glyphicon glyphicon-open-file" aria-hidden="true"></span> Meeting Minutes</a>
      </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
      <div class="list-group">
        <a href="#" class="list-group-item active">
          Settings
        </a>
        <a href="#" class="list-group-item" data-toggle="modal" data-target="#addTerminalModal"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Terminal</a>
        <a href="#" class="list-group-item" data-toggle="modal" data-target="#addLifter"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Lifter</a>
        <a href="#" class="list-group-item" data-toggle="modal" data-target="#addCargotype"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Cargo Type</a>
        <a href="#" class="list-group-item" data-toggle="modal" data-target="#addConsignee"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Consignee</a>
      </div>
  </div>
  <style>
    .update-nag{
  display: inline-block;
  font-size: 14px;
  text-align: left;
  background-color: #fff;
  height: 40px;
  -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.2);
  box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
  margin-bottom: 10px;
}

.update-nag:hover{
    cursor: pointer;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.4);
  box-shadow: 0 1px 1px 0 rgba(0,0,0,.3);
}

.update-nag > .update-split{
  background: #337ab7;
  width: 33px;
  float: left;
  color: #fff!important;
  height: 100%;
  text-align: center;
}

.update-nag > .update-split > .glyphicon{
  position:relative;
  top: calc(50% - 9px)!important; /* 50% - 3/4 of icon height */
}
.update-nag > .update-split.update-success{
  background: #5cb85c!important;
}

.update-nag > .update-split.update-danger{
  background: #d9534f!important;
}

.update-nag > .update-split.update-info{
  background: #5bc0de!important;
}



.update-nag > .update-text{
  line-height: 19px;
  padding-top: 11px;
  padding-left: 45px;
  padding-right: 20px;
}
  </style>
  <div class="col-md-6">
      <div class="col-md-12">
          <div class="update-nag">
            <div class="update-split"><i class="glyphicon glyphicon-refresh"></i></div>
            <div class="update-text">AGB-890 Just added <a href="#">Update Now</a> </div>
          </div>
        </div>
    
        <div class="col-md-12">
          <div class="update-nag">
            <div class="update-split update-info"><i class="glyphicon glyphicon-folder-open"></i></div>
            <div class="update-text">AGB-999 NXP Documents  <a href="#">Download</a><a href="#">Update Now</a> </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="update-nag">
            <div class="update-split update-success"><i class="glyphicon glyphicon-leaf"></i></div>
            <div class="update-text">EP-114 Incompleted Documentation <a href="#">Update Now</a> </div>
          </div>
        </div>
        
        <div class="col-md-12">
          <div class="update-nag">
            <div class="update-split update-danger"><i class="glyphicon glyphicon-warning-sign"></i></div>
            <div class="update-text"> <strong>Warning</strong> Q3 Permit pending </div>
          </div>
        </div>
  </div>
</div>
