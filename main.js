loadData();
let btnAction = "insert";
$("#studentForm").submit(function(event){
    event.preventDefault();

    let form_data = new FormData($("#studentForm")[0]);
    if(btnAction=="insert"){
        form_data.append("action", "registerstudent");
    }else{
        form_data.append("action", "updatestudent");
    }

 

    $.ajax({
        method: "POST",
        dataType: "JSON",
        url : "api.php",
        data : form_data,
        processData: false,
        contentType: false, 
        success : function(data){
       let status = data.status;
       let response = data.data;
       
       $("#studentForm")[0].reset();
       alert(response);
       btnAction = "insert"
       loadData();

        },
        error: function(data){

            console.log(data);
        }
    })
})


function loadData(){
    $("#studentTable tbody").html("");
    let sendingData ={
        "action": "readAll"
    }

    $.ajax({
        method: "POST",
        dataType: "JSON",
        url : "api.php",
        data : sendingData,

        success : function(data){
            let status= data.status;
            let response= data.data;
            let html='';
            let tr= '';

            if(status){
                response.forEach(item=>{
                    tr += "<tr>";
                    for(let i in item){

                        tr += `<td>${item[i]}</td>`;

                    }
                    tr += `<td> <a class="btn btn-info update_info"  update_id=${item['id']}><i class="fas fa-pencil"></i></a>&nbsp;&nbsp <a class="btn btn-danger delete_info" delete_id=${item['id']}><i class="fas fa-trash"></i></a> </td>`
                    tr+= "</tr>"
                })

                $("#studentTable tbody").append(tr);
            }

        },
        error: function(data){

        }

    })
}

function fetchinfo(id){
    let sendingData ={
        "action": "readstudentinfo",
        "id" : id
    }

    $.ajax({
        method: "POST",
        dataType: "JSON",
        url : "api.php",
        data : sendingData,

        success : function(data){
            let status= data.status;
            let response= data.data;
            let html='';
            let tr= '';

            if(status){
                
                //  $("#student_id").val(response[0].id);
                //  $("#student_name").val(response[0].name);
                //  $("#student_class").val(response[0].class);
                 $("#studentmodal").modal("show");
                 btnAction = "update"
                
            }

        },
        error: function(data){

        }

    })
}

function deletestudent(id){
    let sendingData ={
        "action": "deletestudent",
        "id" : id
    }

    $.ajax({
        method: "POST",
        dataType: "JSON",
        url : "api.php",
        data : sendingData,

        success : function(data){
            let status= data.status;
            let response= data.data;
            let html='';
            let tr= '';

            if(status){
            alert(response[0]);
            loadData();
                
            }

        },
        error: function(data){

        }

    })
}

$("#studentTable").on("click", "a.update_info",function(){

    let id= $(this).attr("update_id");
    fetchinfo(id);
})


$("#studentTable").on("click", "a.delete_info",function(){

    let id= $(this).attr("delete_id");
    if(confirm("Are you sure To Delete")){
        deletestudent(id);
       
    }
})