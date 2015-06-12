<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/includes/View.php";

require_once $_SERVER["DOCUMENT_ROOT"]."/includes/jQueryManager.php";
use ArcherSys\Viewer\Contrib\View;
use ArcherSys\Viewer\jQueryManager;
use ArcherSys\Viewer\TabsDefinition;
$archerscript = new View("ArcherScript",function(){

?>

<script src="/core/jquery-ui-1.11.3.custom/external/jquery/jquery.js"></script>

<?php

jQueryManager::addjQueryUI();
jQueryManager::addjQueryUICSS("main");
jQueryManager::addjQueryUICSS("structure");

jQueryManager::addjQueryUICSS("theme");


?>
<script src="/core/asosblockly/blockly_compressed.js"></script>
<script src="/core/asosblockly/blocks_compressed.js"></script>

<script src="/core/asosblockly/python_compressed.js"></script>
<script src="/core/asosblockly/msg/js/en.js"></script>

<script src="/developer/ace-builds/src-min/ace.js" type="text/javascript" charset="utf-8"></script>

<style>
    div[id^=editor]{
        width: 800px;
        height: 200px;
    }
</style>
<?php
},function(){

?><div id='blocklyDiv' style='height: 480px; width: 1000px;'></div>
<div id='editorBoxPython'></div>


<xml id="toolboxPython" style="display: none">

<category name="BoxBloxx" id="catBoxBloxx'>

<block type="importboxoauth"></block>

<block type="oauth2"></block>

</category>



</xml>


<script type="text/javascript" src="script.js"></script>
<script src="http://localhost/storage.js"></script>
<script type="text/javascript">
$(function(){
Blockly.Blocks['importboxoauth'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Import Box OAuth");
    this.setNextStatement(true);
    this.setColour(210);
    this.setTooltip('This block imports the OAuth part of the Code Blocks.');
    this.setHelpUrl('https://github.com/box/box-python-sdk/blob/master/README.rst');
  }
};
Blockly.Blocks['importboxclient'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Import Box Client ");
    this.setPreviousStatement(true);
    this.setNextStatement(true);
    this.setColour(210);
    this.setTooltip('');
    this.setHelpUrl('http://www.example.com/');
  }
};
 
Blockly.Blocks['oauth2'] = {
  init: function() {
    this.appendValueInput("CLIENT_ID")
        .setCheck("String")
        .appendField("Client ID:");
    this.appendValueInput("CLIENT_SECRET")
        .setCheck("String")
        .appendField("Client Secret:");
    this.appendValueInput("store_tokens")
        .setCheck("function")
        .appendField("Store Tokens Block");
    this.setOutput(true, "Oauth2");
    this.setColour(260);
    this.setTooltip('Creates an Oauth2 Object');
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.Blocks['get_oauth_url'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("oauth.get_authorization_url");
    this.appendValueInput("REDIRECT_URI")
        .setCheck("String")
        .appendField("Redirect URI");
    this.appendDummyInput()
        .appendField("variables")
        .appendField(new Blockly.FieldVariable("item"), "auth_url")
        .appendField(new Blockly.FieldVariable("item"), "csrf_token");
    this.setOutput(true);
    this.setTooltip('');
    this.setHelpUrl('http://www.example.com/');
  }
};
// Generators
Blockly.Python['importboxoauth'] = function(block) {
  // TODO: Assemble Python into code variable.
  var code = 'from boxsdk import OAuth2\n';
  return code;
};
Blockly.Python['oauth2'] = function(block) {
  var value_client_id = Blockly.Python.valueToCode(block, 'CLIENT_ID', Blockly.Python.ORDER_ATOMIC);
  var value_client_secret = Blockly.Python.valueToCode(block, 'CLIENT_SECRET', Blockly.Python.ORDER_ATOMIC);
  var value_st_name = Blockly.Python.valueToCode(block, 'store_tokens', Blockly.Python.ORDER_ATOMIC);
  // TODO: Assemble Python into code variable.
  var code = ' OAuth2(\n\tclient_id="' + value_client_id + '"\n\t,client_secret="' +  value_client_secret + '",\n\tstore_tokens= "' + value_st_name + '" \n,)\n';
  // TODO: Change ORDER_NONE to the correct strength.
  return [code, Blockly.Python.ORDER_NONE];
};


Blockly.Python['get_oauth_url'] = function(block) {
  var value_redirect_uri = Blockly.Python.valueToCode(block, 'REDIRECT_URI', Blockly.Python.ORDER_ATOMIC);
  var variable_auth_url = Blockly.Python.variableDB_.getName(block.getFieldValue('auth_url'), Blockly.Variables.NAME_TYPE);
  var variable_csrf_token = Blockly.Python.variableDB_.getName(block.getFieldValue('csrf_token'), Blockly.Variables.NAME_TYPE);
  // TODO: Assemble Python into code variable.
  var code = variable_auth_url + ', ' + variable_csrf_token + ' = ' + 'oauth.get_authorization_url(\'' + value_redirect_uri + '\')';
  return code;
};

Blockly.Python['importboxclient'] = function(block) {
  // TODO: Assemble Python into code variable.
  var code = 'from boxsdk import Client\n';
  return code;
};

  var workspace = Blockly.inject('blocklyDiv',
      {toolbox: window.document.getElementById('toolboxPython')});
var editor = ace.edit('editorPython');
workspace.addChangeListener(function(){
var code = Blockly.Python.workspaceToCode(workspace);



var textarea = $('textarea[name=editorPython]').hide();
editor.getSession().setValue(code);
editor.getSession().on('change', function(){
  textarea.val(editor.getSession().getValue());
  
});
});
});
</script>
<div id="editorPython"></div>
<textarea name='editorPython'></textarea>
<?php
});
?>