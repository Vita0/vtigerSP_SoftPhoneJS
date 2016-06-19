var server_ip;
var server_port;
var sip_number;
var sip_password;

$.ajax({
    url: "module.html",cache: false,success: function(html){
        $( "body" ).append( html );
        
        $.ajax({
            url: "softPhone_vtiger.php",
            dataType: 'json',
            cache: false,
            success: function(json){
                server_ip = json.server_ip;
                server_port = json.server_port;
                sip_number = json.sip_number;
                sip_password = json.sip_password;
                console.log("server info: " + server_ip + ":" + server_port + " // " + sip_number + " " + sip_password);
            }
        });
        
    }
});
