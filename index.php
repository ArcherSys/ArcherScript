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

<script src="/core/asosblockly/php_compressed.js"></script>
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
<div id='editorPHP'></div>


<xml id="toolboxPHP" style="display: none">
<category id="catControl">
    <block type="controls_if"></block>
    <block type="controls_whileUntil"></block>
</category>
  <category name="Logic" id="catLogic">
      <block type="logic_compare"></block>
      <block type="logic_operation"></block>
      <block type="logic_negate"></block>
      <block type="logic_boolean"></block>
      <block type="logic_null"></block>
      <block type="logic_ternary"></block>
</category>
<category id="catOOP" name="Object Oriented Programming">
  <block type="class"></block>

  <block type="member"></block>
  <block type="private_method"></block>
  <block type="method"></block>
</category>
<category id="catMath" name="Math">
  <block type="math_number"></block>
  <block type="math_arithmetic"></block>
</category>
<category id="catText" name="String">
  <block type="text"></block>
</category>    <category name="Variables" custom="VARIABLE"></category>
<category id="catProcedures" name="Procedures" custom="PROCEDURE"></category>

<category id="catArcherSys" name="ArcherSys OS">
   
  <block type="declarephp"></block>
  <block type="addjquery"></block>
  <block type="addh1"></block>
  <block type="defineview"></block>
  <category id="catArcherSysCode" name="Code Imports">
  <block type="import"></block>
  
  <block type="use"></block>
</category>
</category>


</xml>
<xml id="toolboxJS" style="display: none">



</xml>


<script type="text/javascript" src="script.js"></script>
<script src="http://localhost/storage.js"></script>
<script type="text/javascript">
$(function(){
Blockly.Blocks['defineview'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("ArcherSysOSView");
    this.appendValueInput("Title")
        .appendField("View Title:");
    this.appendStatementInput("head")
        .appendField("Configuration and Logic");
    this.appendStatementInput("body")
        .appendField("Content");
    this.setColour(20);
    this.setTooltip('');
    this.setNextStatement(true);
    this.setPreviousStatement(true);
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.Blocks['addjquery'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("jQueryManager::addjQuery");
    this.setPreviousStatement(true);
    this.setNextStatement(true);
    this.setColour(120);
    this.setTooltip('');
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.Blocks['import'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("require_once");
    this.appendValueInput("codefile")
        .appendField("PHP File")
        .appendField(new Blockly.FieldTextInput("default"), "codefile");
    this.setColour(330);
    this.setTooltip('');
    this.setNextStatement(true);
    this.setPreviousStatement(true);
    this.setHelpUrl('http://www.example.com/');
  }
};


Blockly.Blocks['declarephp'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("<?php");
    this.appendStatementInput("code")
        .appendField("Code");
    this.setColour(120);
    this.setTooltip('');
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.Blocks['use'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("use");
    this.appendValueInput("object")
        .setCheck("String")
        .appendField("Object")
        .appendField(new Blockly.FieldTextInput("ArcherSys\\Viewer\\Contrib\\"), "Object");
    this.setPreviousStatement(true);
    this.setColour(65);
    this.setTooltip('');
    this.setNextStatement(true);
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.PHP['use'] = function(block) {
  var value_object = Blockly.PHP.valueToCode(block, 'object', Blockly.PHP.ORDER_ATOMIC);
  var text_object = block.getFieldValue('Object');
  // TODO: Assemble JavaScript into code variable.
  var code = 'use ' + text_object + ';';
  return code;
};
Blockly.PHP['import'] = function(block) {
  var value_codefile = Blockly.PHP.valueToCode(block, 'codefile', Blockly.PHP.ORDER_ATOMIC);
  var text_codefile = block.getFieldValue('codefile');
  // TODO: Assemble JavaScript into code variable.
  var code = '\nrequire_once $_SERVER["DOCUMENT_ROOT"]."/includes/'+ text_codefile+'";';
  return code;
};
Blockly.PHP['addjquery'] = function(block) {
  // TODO: Assemble PHP into code variable.
  var code = '\njQueryManager::addjQuery();';
  return code;
};
Blockly.PHP['defineview'] = function(block) {
  var value_title = Blockly.PHP.valueToCode(block, 'Title', Blockly.PHP.ORDER_ATOMIC);
  var statements_head = Blockly.PHP.statementToCode(block, 'head');
  var statements_body = Blockly.PHP.statementToCode(block, 'body');
  // TODO: Assemble PHP into code variable.
  var code = '\n$view = new View("' + value_title + '",function(){\n'+ statements_head + '\n},function(){'+statements_body + '});	';
  return code;
};
Blockly.PHP['declarephp'] = function(block) {
  var statements_code = Blockly.PHP.statementToCode(block, 'code');
  // TODO: Assemble PHP into code variable.
  var code = PHP + " \n" + statements_code + ' \n?> ';
  return code;
};
Blockly.Blocks['addh1'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("HeaderManager::addH1");
    this.appendValueInput("text")
        .setCheck("String")
        .appendField("Text");
    this.setInputsInline(true);
    this.setPreviousStatement(true);
    this.setNextStatement(true);
    this.setColour(65);
    this.setTooltip('');
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.PHP['class'] = function(block) {
  var statements_code = Blockly.PHP.statementToCode(block, 'code');
  var text_class_name = block.getFieldValue('class_name');
 
  // TODO: Assemble PHP into code variable.
  var code = 'class ' + text_class_name + ' {\n' + statements_code + '\n }  ';
  return code;
};
Blockly.PHP['method'] = function(block) {
  var text_function_name = block.getFieldValue('function_name');
  var text_param1 = block.getFieldValue('param1');
  var text_param2 = block.getFieldValue('param2');
  var statements_function_body = Blockly.PHP.statementToCode(block, 'function_body');
  // TODO: Assemble PHP into code variable.
  var code = 'public function ' + text_function_name + '(' + text_param1 + '){\n' + statements_function_body + ' \n}';
 
  return code;
};
Blockly.Blocks['private_method'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("private function")
        .appendField(new Blockly.FieldTextInput("default"), "method_name")
        .appendField("(")
        .appendField(new Blockly.FieldTextInput("$foo"), "param1")
        .appendField(",")
        .appendField(new Blockly.FieldTextInput("$bar"), "param2")
        .appendField("){");
    this.appendStatementInput("method_name");

    this.setPreviousStatement(true);
    this.setNextStatement(true);
    this.appendDummyInput()
        .appendField("}");
    this.setTooltip('');
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.PHP['private_method'] = function(block) {
  var statements_method_name = Blockly.PHP.statementToCode(block, 'method_name');
  var text_method_name = block.getFieldValue('method_name');
  var text_param1 = block.getFieldValue('param1');
  var text_param2 = block.getFieldValue('param2');
  // TODO: Assemble PHP into code variable.
  var code = 'private function ' + text_method_name + '(' + text_param1 + ',' + text_param2 + '){\n' + statements_method_name + '\n}';
  return code;
};
Blockly.Blocks['member'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("public ")
        .appendField(new Blockly.FieldTextInput("$variable"), "var");
    this.setPreviousStatement(true, "object");
    this.setNextStatement(true);
    this.setColour(160);
    this.setTooltip('');
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.PHP['member'] = function(block) {
  var text_var = block.getFieldValue('var');
  // TODO: Assemble PHP into code variable.
  var code = 'public '+text_var + ";\n";
  return code;
};

Blockly.Blocks['method'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("public function")
        .appendField(new Blockly.FieldTextInput("default"), "function_name")
        .appendField("(")
        .appendField(new Blockly.FieldTextInput("$foo"), "param1")
        .appendField(",")
        .appendField(new Blockly.FieldTextInput("$bar"), "param2")
        .appendField("){");
    this.appendStatementInput("function_body");
    this.setPreviousStatement(true);
    this.setNextStatement(true);
    this.setColour(120);
    this.setTooltip('');
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.Blocks['class'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("class")
        .appendField(new Blockly.FieldTextInput("default"), "class_name");
    this.appendDummyInput()
        .appendField("{");
    this.appendStatementInput("code")
        .setCheck("object");
    this.appendDummyInput()
        .appendField("}");
    this.setPreviousStatement(true);
    this.setNextStatement(true);
    this.setColour(210);
    this.setTooltip('');
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.PHP['addh1'] = function(block) {
  var value_name = Blockly.PHP.valueToCode(block, 'h1', Blockly.PHP.ORDER_ATOMIC);
  var value_text = block.getFieldValue('text');
  // TODO: Assemble PHP into code variable.
  var code = '\nHeaderManager::addH1('+value_text +');';
  return code;
};
  var workspace = Blockly.inject('blocklyDiv',
      {toolbox: window.document.getElementById('toolboxPHP')});
var editor = ace.edit('editorPHP');
workspace.addChangeListener(function(){
var code = Blockly.PHP.workspaceToCode(workspace);



var textarea = $('textarea[name=editorPHP]').hide();
editor.getSession().setValue(code);
editor.getSession().on('change', function(){
  textarea.val(editor.getSession().getValue());
  
});
});
});
</script>
<textarea name='editorPHP'></textarea>
<?php
});
?>