submitTryit()

function submitTryit(n) {
  var text = document.getElementById("textareaCode").value;
  var ifr = document.createElement("iframe");
  ifr.setAttribute("frameborder", "0");
  ifr.setAttribute("id", "iframeResult");
  document.getElementById("iframewrapper").innerHTML = "";
  document.getElementById("iframewrapper").appendChild(ifr);
  var ifrw = (ifr.contentWindow) ? ifr.contentWindow : (ifr.contentDocument.document) ? ifr.contentDocument.document : ifr.contentDocument;
  ifrw.document.open();
  ifrw.document.write(text);
  ifrw.document.close();
  //23.02.2016: contentEditable is set to true, to fix text-selection (bug) in firefox.
  //(and back to false to prevent the content from being editable)
  //(To reproduce the error: Select text in the result window with, and without, the contentEditable statements below.)
  if (ifrw.document.body && !ifrw.document.body.isContentEditable) {
    ifrw.document.body.contentEditable = true;
    ifrw.document.body.contentEditable = false;
  }
//  if (!adrefreshtimer) {adrefreshtimer = new Date().getTime();}
//  if (new Date().getTime() - adrefreshtimer >= 30000) {
//  if (n == 1) {
//    googletag.cmd.push(function() {
//      googletag.pubads().refresh([gptAdSlots[0]]);
//    });
//  }
//    adrefreshtimer = new Date().getTime();
//  }
}
if ((window.screen.availWidth <= 768 && window.innerHeight > window.innerWidth) || "" == " horizontal") {restack(true);}
function restack(horizontal) {
    var tc, ic, t, i, c, f, sv, sh, d, height, flt, width;
    tc = document.getElementById("textareacontainer");
    ic = document.getElementById("iframecontainer");
    t = document.getElementById("textarea");
    i = document.getElementById("iframe");
    c = document.getElementById("container");
    sv = document.getElementById("stackV");
    sh = document.getElementById("stackH");
    tc.className = tc.className.replace("horizontal", "");
    ic.className = ic.className.replace("horizontal", "");
    t.className = t.className.replace("horizontal", "");
    i.className = i.className.replace("horizontal", "");
    c.className = c.className.replace("horizontal", "");
    sv.className = sv.className.replace("horizontal", "");
    sh.className = sh.className.replace("horizontal", "");
    stack = "";
    if (horizontal) {
        tc.className = tc.className + " horizontal";
        ic.className = ic.className + " horizontal";
        t.className = t.className + " horizontal";
        i.className = i.className + " horizontal";
        c.className = c.className + " horizontal";
        sv.className = sv.className + " horizontal";
        sh.className = sh.className + " horizontal";
        stack = " horizontal";
        document.getElementById("textareacontainer").style.height = "50%";
        document.getElementById("iframecontainer").style.height = "50%";
        document.getElementById("textareacontainer").style.width = "100%";
        document.getElementById("iframecontainer").style.width = "100%";
    } else {
        document.getElementById("textareacontainer").style.height = "100%";
        document.getElementById("iframecontainer").style.height = "100%";
        document.getElementById("textareacontainer").style.width = "50%";
        document.getElementById("iframecontainer").style.width = "50%";
    }
    fixDragBtn();
    showFrameSize();
}
if (navigator.userAgent.indexOf("WebKit") > -1 && navigator.userAgent.indexOf("Edge") == -1) {
    document.getElementById("codecolor").className += " codecolorCC";
    document.getElementById("textareaCode").className += " textareaCC";
    removetabs();
    removespaces();
    colorcoding();
    if (document.getElementById("textareaCode").addEventListener) {
        document.getElementById("textareaCode").addEventListener("input", removetabs);
        document.getElementById("textareaCode").addEventListener("input", colorcoding);
        document.getElementById("textareaCode").addEventListener("scroll", syncscroll);
    } else if (document.getElementById("textareaCode").attachEvent) {
        document.getElementById("textareaCode").attachEvent("oninput", removetabs);
        document.getElementById("textareaCode").attachEvent("oninput", colorcoding);
        document.getElementById("textareaCode").attachEvent("onscroll", syncscroll);
    }
}
function removetabs() {
    var text = document.getElementById("textareaCode").value;
    text = text.replace(/\t/g, " ");
    document.getElementById("textareaCode").value = text;
}
function removespaces() {
  var textlines, i, j, newtext = "", newline;
  textlines = document.getElementById("textareaCode").value.split("\n");
  for (i = 0; i < textlines.length; i++) {
    newline = textlines[i];
    for (j = newline.length - 1; j >= 0; j--) {
      if (newline[j] != " ") {
        newline = newline.substr(0, j + 1);
        break;
      }
    }
    newtext += newline + "\n";
  }
  document.getElementById("textareaCode").value = newtext;
}
function colorcoding() {
    var text = document.getElementById("textareaCode").value;
    text = text.replace(/&/g, "&amp;");
    text = text.replace(/\t/g, "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
    text = text.replace(/  /g, " &nbsp;");
    text = text.replace(/</g, "&lt;");
    text = text.replace(/>/g, "&gt;");
    text = text.replace(/(?:\r\n|\r|\n)/g, '<br>');
    text = text.replace(/<br> /g, "<br>&nbsp;");
    text = w3CodeColorize(text);
    document.getElementById("codecolor").innerHTML = text + "<br>";
}
function syncscroll() {
    document.getElementById("codecolor").scrollTop = document.getElementById("textareaCode").scrollTop;
}
//var framesizetimeout;
function showFrameSize() {
  var t;
//  if (navigator.userAgent.indexOf("Edge") > -1) {return;}
//  if (stack == " horizontal") {
//    document.getElementById("framesize").style.top = "auto";
//    document.getElementById("framesize").style.bottom = "11px";
//  } else {
//    t = (Number(w3_getStyleValue(document.getElementById("container"), "top").replace("px", "")) + 2).toFixed();
//    document.getElementById("framesize").style.top = t + "px";
//    document.getElementById("framesize").style.bottom = "auto";
//  }
  var width, height;
//  if (framesizetimeout) {window.clearTimeout(framesizetimeout);}
  width = Number(w3_getStyleValue(document.getElementById("iframeResult"), "width").replace("px", "")).toFixed();
  height = Number(w3_getStyleValue(document.getElementById("iframeResult"), "height").replace("px", "")).toFixed();
//  document.getElementById("framesize").style.display = "block";
  document.getElementById("framesize").innerHTML = "Result Size: <span>" + width + " x " + height + "</span>";
//  framesizetimeout = window.setTimeout(function () {document.getElementById("framesize").style.display = "none";}, 1000);
}
var dragging = false;
var stack;
function fixDragBtn() {
  var textareawidth, leftpadding, dragleft, containertop, buttonwidth
  var containertop = Number(w3_getStyleValue(document.getElementById("container"), "top").replace("px", ""));
  if (stack != " horizontal") {
    document.getElementById("dragbar").style.width = "5px";
    textareasize = Number(w3_getStyleValue(document.getElementById("textareaCode"), "width").replace("px", ""));
    leftpadding = Number(w3_getStyleValue(document.getElementById("textarea"), "padding-left").replace("px", ""));
    buttonwidth = Number(w3_getStyleValue(document.getElementById("dragbar"), "width").replace("px", ""));
    textareaheight = w3_getStyleValue(document.getElementById("textareaCode"), "height");
    dragleft = textareasize + leftpadding + (leftpadding / 2) - (buttonwidth / 2);
    document.getElementById("dragbar").style.top = containertop + "px";
    document.getElementById("dragbar").style.left = dragleft + "px";
    document.getElementById("dragbar").style.height = textareaheight;
    document.getElementById("dragbar").style.cursor = "col-resize";

  } else {
    document.getElementById("dragbar").style.height = "5px";
    if (window.getComputedStyle) {
        textareawidth = window.getComputedStyle(document.getElementById("textareaCode"),null).getPropertyValue("height");
        textareaheight = window.getComputedStyle(document.getElementById("textareaCode"),null).getPropertyValue("width");
        leftpadding = window.getComputedStyle(document.getElementById("textarea"),null).getPropertyValue("padding-top");
        buttonwidth = window.getComputedStyle(document.getElementById("dragbar"),null).getPropertyValue("height");
    } else {
        dragleft = document.getElementById("textareaCode").currentStyle["width"];
    }
    textareawidth = Number(textareawidth.replace("px", ""));
    leftpadding = Number(leftpadding .replace("px", ""));
    buttonwidth = Number(buttonwidth .replace("px", ""));
    dragleft = containertop + textareawidth + leftpadding + (leftpadding / 2);
    document.getElementById("dragbar").style.top = dragleft + "px";
    document.getElementById("dragbar").style.left = "5px";
    document.getElementById("dragbar").style.width = textareaheight;
    document.getElementById("dragbar").style.cursor = "row-resize";
  }
}
function dragstart(e) {
  e.preventDefault();
  dragging = true;
  var main = document.getElementById("iframecontainer");
}
function dragmove(e) {
  if (dragging)
  {
    document.getElementById("shield").style.display = "block";
    if (stack != " horizontal") {
      var percentage = (e.pageX / window.innerWidth) * 100;
      if (percentage > 5 && percentage < 98) {
        var mainPercentage = 100-percentage;
        document.getElementById("textareacontainer").style.width = percentage + "%";
        document.getElementById("iframecontainer").style.width = mainPercentage + "%";
        fixDragBtn();
      }
    } else {
      var containertop = Number(w3_getStyleValue(document.getElementById("container"), "top").replace("px", ""));
      var percentage = ((e.pageY - containertop + 20) / (window.innerHeight - containertop + 20)) * 100;
      if (percentage > 5 && percentage < 98) {
        var mainPercentage = 100-percentage;
        document.getElementById("textareacontainer").style.height = percentage + "%";
        document.getElementById("iframecontainer").style.height = mainPercentage + "%";
        fixDragBtn();
      }
    }
    showFrameSize();
  }
}
function dragend() {
  document.getElementById("shield").style.display = "none";
  dragging = false;
}
if (window.addEventListener) {
  document.getElementById("dragbar").addEventListener("mousedown", function(e) {dragstart(e);});
  document.getElementById("dragbar").addEventListener("touchstart", function(e) {dragstart(e);});
  window.addEventListener("mousemove", function(e) {dragmove(e);});
  window.addEventListener("touchmove", function(e) {dragmove(e);});
  window.addEventListener("mouseup", dragend);
  window.addEventListener("touchend", dragend);
  window.addEventListener("load", fixDragBtn);
  window.addEventListener("load", showFrameSize);
}
function w3_getStyleValue(elmnt,style) {
    if (window.getComputedStyle) {
        return window.getComputedStyle(elmnt,null).getPropertyValue(style);
    } else {
        return elmnt.currentStyle[style];
    }
}
//SAVE AND OPEN SCRIPT
var oauthToken;
var userAction;
var pickerApiLoaded;
var developerKey = 'AIzaSyAMZDPXiGcCNWs1UCWG9LS6kkW5YiABfJ0';
var CLIENT_ID = '451843133508-ckbr5r6ch1ofqbmh87oll4u6ltinqv2t.apps.googleusercontent.com';
var SCOPES = ['https://www.googleapis.com/auth/drive.file'];

//Check if current user has authorized this application
function checkAuth() {
    gapi.auth.authorize(
    {
        'client_id': CLIENT_ID,
        'scope': SCOPES.join(' '),
        'immediate': true
    }, handleAuthResult);
}

//Handle response from authorization server
function handleAuthResult(authResult) {
    if (authResult && !authResult.error) {
        oauthToken = authResult.access_token;
        loadApi();
    }
}

// Initiate auth flow in response to user clicking authorize button
function handleAuthClick(event,userClick) {
    userAction = userClick;
    gapi.auth.authorize(
        {client_id: CLIENT_ID, scope: SCOPES, immediate: false},
        handleAuthResult);
    return false;
}

// Load API library
function loadApi() {
    gapi.client.load('drive', 'v3');
    gapi.load('picker', {'callback': onPickerApiLoad});
}
function onPickerApiLoad() {
    pickerApiLoaded = true;
    if (userAction=="save") {
        userAction="";
        document.getElementById('driveText').style.display='none';
        document.getElementById('driveSavedPanel').style.display='block';
        createFileWithHTMLContent(document.getElementById('googleFileName').value,document.getElementById('textareaCode').value)
    }
    if (userAction=="open") {
        userAction="";
        createPicker();
    }
}

// Create and render a Picker object for picking HTML file
function createPicker() {
    if (pickerApiLoaded) {
        var view = new google.picker.View(google.picker.ViewId.DOCS);
        view.setMimeTypes("text/html");
        var picker = new google.picker.PickerBuilder().
            addView(view).
            setOAuthToken(oauthToken).
            setDeveloperKey(developerKey).
            setCallback(pickerCallback).
            build();
        picker.setVisible(true);
    }
}
// Put content of file in tryit editor
function pickerCallback(data) {
    var docID = '';
    if (data[google.picker.Response.ACTION] == google.picker.Action.PICKED) {
        var doc = data[google.picker.Response.DOCUMENTS][0];
        docID = doc[google.picker.Document.ID];
        getContentOfFile(docID);
    }
}

//Get contents
function getContentOfFile(theID){
    gapi.client.request({'path': '/drive/v2/files/'+theID,'method': 'GET',callback: function ( theResponseJS, theResponseTXT ) {
        var myToken = gapi.auth.getToken();
        var myXHR   = new XMLHttpRequest();
        myXHR.open('GET', theResponseJS.downloadUrl, true );
        myXHR.setRequestHeader('Authorization', 'Bearer ' + myToken.access_token );
        myXHR.onreadystatechange = function( theProgressEvent ) {
            if (myXHR.readyState == 4) {
                if ( myXHR.status == 200 ) {
                    var code = myXHR.response;
                    document.getElementById("textareaCode").value=code;
                    if (navigator.userAgent.indexOf("WebKit") > -1 && navigator.userAgent.indexOf("Edge") == -1) {
                        removetabs();
                        removespaces();
                        colorcoding();
                    }
                    submitTryit(1);
                    resetModal();
                }
            }
        }
        myXHR.send();
        }
    });
}

var createFileWithHTMLContent = function(name,data,callback) {
    const boundary = '-------314159265358979323846';
    const delimiter = "\r\n--" + boundary + "\r\n";
    const close_delim = "\r\n--" + boundary + "--";
    const contentType = 'text/html';

    var metadata = {
        'name': name,
        'mimeType': contentType
    };

    var multipartRequestBody =
        delimiter +
        'Content-Type: application/json\r\n\r\n' +
        JSON.stringify(metadata) +
        delimiter +
        'Content-Type: ' + contentType + '\r\n\r\n' +
        data +
        close_delim;

    var request = gapi.client.request({
        'path': '/upload/drive/v3/files',
        'method': 'POST',
        'params': {'uploadType': 'multipart'},
        'headers': {
            'Content-Type': 'multipart/related; boundary="' + boundary + '"'
        },
        'body': multipartRequestBody});
    if (!callback) {
        callback = function(file) {
            console.log(file);
            document.getElementById("driveSavedText").innerHTML = file.name + " saved in Google Drive";
            document.getElementById("driveSavedPanel").className = "w3-panel w3-large";
        };
    }
    request.execute(callback);
}

if (navigator.userAgent.indexOf("MSIE") > 0 || navigator.userAgent.indexOf("Edge") > 0) {
    document.getElementById("gDrive").style.display = "none";
}

window.onclick = function(event) {
  if (event.target == document.getElementById('driveModal')) {
    resetModal();
  }
}

function resetModal() {
    document.getElementById('driveSavedText').innerHTML='';
    document.getElementById('driveModal').style.display='none'
    document.getElementById('driveSavedPanel').style.display='none'
    document.getElementById('driveText').style.display='block'
    document.getElementById("driveSavedPanel").className = "w3-panel w3-large loader";
}
