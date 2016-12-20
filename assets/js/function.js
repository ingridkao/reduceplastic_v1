var storage = sessionStorage;
var today = new Date( );

function showTime() {
    var now_date_format = today.getFullYear()+"年"+(today.getMonth()+1)+"月"+today.getDate()+"日";
    document.getElementById("now_date").innerHTML = now_date_format;
    storage.setItem('now', now_date_format);

    var myStartDate = new Date("2016/12/19 00:00:00");
    var dateDiff = parseInt((today - myStartDate)/ 86400000 );
    $('#activity_date, #activity_date2').text(dateDiff);
}

function getCreateTime(){
    var now_date = today.getFullYear() + "-" + (today.getMonth() + 1) + "-" + today.getDate() + " " +  today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
    document.getElementById("created").value = now_date;
}


function getUserSession(){
    var userName = storage.getItem('userName');
    var total = storage.getItem('total');
    
    $('#userName').text(userName);
    $('#userTotalReduce, #userTotalReduce2').text(total);
}

function showLevel(){
    $("#myselect").change(function(){
        sessionStorage.removeItem('level');
        $('.animals').hide();
        
        var select = $('#myselect').val();
        var animal_type = $('.animal'+select);
        sessionStorage.setItem('level', select);
        animal_type.show();
        $('.garbage_box').show();

        switch (select){
            case "0":
                $('.level1').hide();
                break;                
            case "1":
                $('.level1 ,.level2').hide();
                break;
            case "2": 
                $('.level1 ,.level2,.level3').hide();
                break;
            case "3": 
                $('.level1 ,.level2,.level3,.level4').hide();
                break;
            case "4": 
                $('.level1 ,.level2,.level3,.level4,.level5').hide();
                break;
            case "5": 
                $('.garbage_box').hide();
                $('.animals').show();
                break;
            default: 
                $('.garbage_box').show();
        }
    });
}

function checkId(){  
    var xhr = new XMLHttpRequest();
    var userID = document.getElementById('userId').value;
    var form = document.getElementById("msform");
    var url= "confirmUser.php?userId=" + userID;//檢查帳號是否正確

    xhr.onreadystatechange=function(){
        if (xhr.readyState==4 && xhr.status==200) {
            if (xhr.responseText=="true") { 
                form.setAttribute("method","");
                form.setAttribute("action","formstart.php");
            }else if(xhr.responseText=="false"){
                form.setAttribute("method","POST");
                form.setAttribute("action","start.php");
            }else{
            // document.getElementById("idMsg").innerHTML=xhr.responseText
            }
        }
    }
    xhr.open("Get",url,true);
    xhr.send();//send data
}

function sum(){
    var straw = $("#straw").html(),
        bag = $("#bag").html(),
        bottle = $("#bottle").html(),
        cup = $("#cup").html(),
        tableware = $("#tableware").html();

    var total = parseInt(straw) + parseInt(bag) + parseInt(bottle) + parseInt(cup) + parseInt(tableware);
    sessionStorage.setItem('total', total);
    $("input[name=act_count]").val(total);  
}

function countAdd(type) {
    var inputBox = document.getElementById(type);
    var add_value = parseInt(document.getElementById(type).innerHTML);

    function addNumber(count){
        count = count + 1;
        return count;   
    }

    if (inputBox !== null && add_value <5) {
        var addValue = addNumber(add_value);
        document.getElementById(type).innerHTML = addValue;
        $("input[name="+type+"]").val(addValue);   
    }
    sum();
}  

function countRemove(type) {
    var inputBox = document.getElementById(type);
    var removeNumber = parseInt(document.getElementById(type).innerHTML);

    function minusNumber(count){
        count = count - 1;
        return count;   
    }
    var input_value = type+'_value';
    if (inputBox !== null && removeNumber >0) {
        var minusValue = minusNumber(removeNumber);
        document.getElementById(type).innerHTML = minusValue;
        $("input[name="+type+"]").val(minusValue);
    }
    sum();
}

function selectLevel(select){
    if(select > 801){
        $('.level1 ,.level2').hide();
        $('#end_text').text('因為你的努力，少用一根吸管，海龜被吸管卡住的機會就少了一點。');
        $('.animals.animal0').show();                
    }else if(select > 5000){
        $('.level1 ,.level2,.level3').hide();
        $('#end_text').text('用購物袋取代塑膠袋，海鳥寶寶就多一些長大翱翔的機會。');
        $('.animals.animal2').show();
    }else if(select > 8000){
        $('.level1 ,.level2,.level3,.level4').hide();
        $('#end_text').text('少了20%的塑膠垃圾，海豚也說讚！');
        $('.animals.animal3').show();
    }else if(select > 15000){
        $('.garbage_box').hide();
        $('#end_text').text('鯨歡喜！塑膠垃圾減少了，希望鯨魚誤食塑膠餓死的慘劇到此為止。');
        $('.animals.animal4').show();
    }else if(select > 35000){
        $('.garbage_box').hide();
        $('#end_text').text('海龜、海豚、信天翁、鯨魚和更多海洋生物因為你的參與和行動，才共同守護了美麗海洋的未來');
        $('.animals').show();
    }else{
        $('.level1').hide();
        $('#end_text').text('因為你的努力，少用一根吸管，海龜被吸管卡住的機會就少了一點。');
        $('.animals.animal0').show();
    }     
}