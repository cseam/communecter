<div style="display:none" id="addMembers">
    <!-- start: PAGE CONTENT -->
    <div class="col-md-8 col-md-offset-2">
    	<h1>Add a Member ( Person, Organization )</h1>
        <p>An Organization can have People as members or Organizations</p>
    	
    	<form id="addMemberForm" style="line-height:40px;">
            <div class="row ">
                <table class="table table-striped table-bordered table-hover newMembersAddedTable hide">
                    <thead>
                        <tr>
                            <th class="hidden-xs">Type</th>
                            <th>Name</th>
                            <th class="hidden-xs center">Email</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody class="newMembersAdded"></tbody>
                </table>
            </div>
            <div class="row">
    	        <input type="hidden" id="parentOrganisation" name="parentOrganisation" value="<?php echo (string)$organization["_id"]; ?>"/>
                <select id="memberType" name="memberType">
                    <option value="persons">People</option>
                    <option value="organizations">Organisation</option>
                </select>
    	        
    	        <input placeholder="Name" id="memberName" name="memberName" value=""/></td>
                <input type="Email" placeholder="Email" id="memberEmail" name="memberEmail" value=""/>
    	    </div>
    	    <div class="row">
    	        <button class="btn btn-primary" >Enregistrer</button>
    	    </div>
        </form>
    </div>

    <div class="col-md-8 col-md-offset-2 hide">
        <h1>Batch Import </h1>
        <p>import comma sepearated emails to connect people or Organisations</p>
        
        <form id="memberBatchImport" style="line-height:40px;">
            <div class="row">
                <select>
                    <option value="Person">People</option>
                    <option value="NGO">NGOs</option>
                    <option value="LocalBusiness">Local Businesses</option>
                    <option value="Groups">Groups</option>
                </select>
                <br/>
                <textarea name="memberBatchImport" id="memberBatchImport" cols="30" rows="10"></textarea>
            </div>
            <div class="row">
                <button class="btn btn-primary" >Enregistrer</button>
            </div>
        </form>
    </div>

    <div class="col-md-8 col-md-offset-2 hide">
        <h1>Url Import </h1>
        <p>
            import from a PLP ressource or directory, Git Repo... <br/>
            thoughts : <br/>
            could be interesting to have the jsonFromJsonTo conversion tool <br/>
            takes any url, show humanily > the user maps to the PH schema 
        </p>
        
        <form id="memberUrlImport" style="line-height:40px;">
            <div class="row">
                <input placeholder="Url" id="memberUrl" name="memberUrl" value=""/></td>
            </div>
            <div class="row">
                <button class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
	$("#addMemberForm").off().on("submit",function(event){
    	event.preventDefault();
    	var params = { 
			"memberName" : $("#addMembers #memberName").val(),
			"memberEmail" : $("#addMembers #memberEmail").val(),
			"memberType" : $("#addMembers #memberType").val(), 
			"parentOrganisation" : $("#addMembers #parentOrganisation").val()
		};
    	$.ajax({
            type: "POST",
            url: baseUrl+"/communecter/organization/savemember/id/<?php echo (string)$organization['_id']; ?>",
            data: params,
            dataType: "json",
            success: function(data){
            	if(!data.result){
            		toastr.error(data.content);
            	}else{
            		toastr.success("member added successfully ");
	               	strHTML = "<tr><td>"+$("#addMembers #memberType").val()+"</td><td>"+$("#addMembers #memberName").val()+"</td><td>"+$("#addMembers #memberEmail").val()+"</td><td><span class='label label-info'>added</span></td> <tr>";
	                $(".newMembersAdded").append(strHTML);
	                if($(".newMembersAddedTable").hasClass("hide"))
	                    $(".newMembersAddedTable").removeClass('hide').addClass('animated bounceIn');
	                $("#addMembers #memberType").val("");
	                $("#addMembers #memberName").val("");
	                $("#addMembers #memberEmail").val("");
            	}
            	console.log(data.result);   
            },
            error:function (xhr, ajaxOptions, thrownError){
              toastr.error( thrownError );
            } 
    	});
    });
</script>
	

