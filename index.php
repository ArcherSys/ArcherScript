<!DOCTYPE HTML>
<html>
<head>
<title>ArcherScript</title>
<script src="/core/js/jqueryace/jquery/jquery-1.8.3.min.js"></script>
<script src="/core/asosblockly/blockly_compressed.js"></script>
<script src="/core/asosblockly/blocks_compressed.js"></script>

<script src="/core/asosblockly/php_compressed.js"></script>
<script src="/core/asosblockly/msg/js/en.js"></script>

<script src="/developer/ace-builds/src-min/ace.js" type="text/javascript" charset="utf-8"></script>



<style>
    #editor{
        width: 800px;
        height: 200px;
    }
</style>
</head>
<body>
   

<div id="blocklyDiv" style="height: 480px; width: 800px;"></div>
<div id="editor"></div>
<xml id="toolbox" style="display: none">
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
<category id="catMath">
  <block type="math_number"></block>
  <block type="math_arithmetic"></block>
</category>
<category id="catText">
  <block type="text"></block>
  <block type="text_print"></block>
</category>
<category id="catArcherSys">
   
  <block type="addjquery"></block>
  <block type="defineview"></block>
  <block type="import"></block>
  
  <block type="use"></block>
</category>

<category id="catVariables">
  <block type="variables_set"></block>
  <block type="variables_get"></block>
</category>

</xml>


<script>
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
        .appendField(new Blockly.FieldTextInput("ArcherSys/Viewer/Contrib/"), "Object");
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
  var code = 'require_once $_SERVER["DOCUMENT_ROOT"]."/includes/'+ text_codefile+';';
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
  var code = '$view = new View(' + value_title + ',function(){\n'+ statements_head + '\n},function(){'+'});	';
  return code;
};
Blockly.Blocks['addh1'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("HeadersManager::addH1");
    this.appendValueInput("NAME")
        .setCheck("String")
        .appendField(new Blockly.FieldTextInput("HeaderText"), "heading");
    this.setPreviousStatement(true);
    this.setColour(65);
    this.setTooltip('');
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.PHP['addh1'] = function(block) {
  var value_name = Blockly.PHP.valueToCode(block, 'NAME', Blockly.PHP.ORDER_ATOMIC);
  var text_heading = block.getFieldValue('heading');
  // TODO: Assemble PHP into code variable.
  var code = '\nHeaderManager::addH1('+text_heading +');';
  return code;
};


  var workspace = Blockly.inject('blocklyDiv',
      {toolbox: window.document.getElementById('toolbox')});
var editor = ace.edit("editor");
workspace.addChangeListener(function(){
var code = Blockly.PHP.workspaceToCode(workspace);


var textarea = $('textarea[name="editor"]').hide();
editor.getSession().setValue(code);
editor.getSession().on('change', function(){
  textarea.val(editor.getSession().getValue());
});
});
</script>
</body>
</html>