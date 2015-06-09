<!DOCTYPE HTML>
<html>
<head>
<title>ArcherScript</title>
<<<<<<< HEAD
<script src="/core/js/jquery.js"></script>
=======
<script src="/core/js/jqueryace/jquery/jquery-1.8.3.min.js"></script>
>>>>>>> 85a7c0299e5c8e2da098b3378f20436781c34327
<script src="/core/asosblockly/blockly_compressed.js"></script>
<script src="/core/asosblockly/blocks_compressed.js"></script>

<script src="/core/asosblockly/php_compressed.js"></script>
<script src="/core/asosblockly/msg/js/en.js"></script>
<<<<<<< HEAD
</head>
<body>
<div id="blocklyDiv" style="height: 480px; width: 800px;"></div>
=======

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
>>>>>>> 85a7c0299e5c8e2da098b3378f20436781c34327
<xml id="toolbox" style="display: none">
<category id="catControl">
    <block type="controls_if"></block>
    <block type="controls_whileUntil"></block>
</category>
<<<<<<< HEAD
  <category id="catLogic">
=======
  <category name="Logic" id="catLogic">
>>>>>>> 85a7c0299e5c8e2da098b3378f20436781c34327
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
<<<<<<< HEAD
=======
  <block type="import"></block>
  
  <block type="use"></block>
>>>>>>> 85a7c0299e5c8e2da098b3378f20436781c34327
</category>

<category id="catVariables">
  <block type="variables_set"></block>
  <block type="variables_get"></block>
</category>

</xml>
<<<<<<< HEAD
<form name="coder">
<textarea name="code"></textarea>
</form>
=======


>>>>>>> 85a7c0299e5c8e2da098b3378f20436781c34327
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
<<<<<<< HEAD
=======
    this.setNextStatement(true);
    this.setPreviousStatement(true);
>>>>>>> 85a7c0299e5c8e2da098b3378f20436781c34327
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.Blocks['addjquery'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("jQueryManager::addjQuery");
    this.setPreviousStatement(true);
<<<<<<< HEAD
=======
    this.setNextStatement(true);
>>>>>>> 85a7c0299e5c8e2da098b3378f20436781c34327
    this.setColour(120);
    this.setTooltip('');
    this.setHelpUrl('http://www.example.com/');
  }
};
<<<<<<< HEAD
Blockly.PHP['addjquery'] = function(block) {
  // TODO: Assemble PHP into code variable.
  var code = 'jQueryManager::addjQuery();';
=======
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
>>>>>>> 85a7c0299e5c8e2da098b3378f20436781c34327
  return code;
};
Blockly.PHP['defineview'] = function(block) {
  var value_title = Blockly.PHP.valueToCode(block, 'Title', Blockly.PHP.ORDER_ATOMIC);
  var statements_head = Blockly.PHP.statementToCode(block, 'head');
  var statements_body = Blockly.PHP.statementToCode(block, 'body');
  // TODO: Assemble PHP into code variable.
<<<<<<< HEAD
  var code = '$view = new View(' + value_title + ',function(){'+ statements_head + '\n},function(){'+'});	';
=======
  var code = '$view = new View(' + value_title + ',function(){\n'+ statements_head + '\n},function(){'+'});	';
>>>>>>> 85a7c0299e5c8e2da098b3378f20436781c34327
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
<<<<<<< HEAD
  var code = 'HeaderManager::addH1('+text_heading +');';
=======
  var code = '\nHeaderManager::addH1('+text_heading +');';
>>>>>>> 85a7c0299e5c8e2da098b3378f20436781c34327
  return code;
};


<<<<<<< HEAD

  var workspace = Blockly.inject('blocklyDiv',
      {toolbox: window.document.getElementById('toolbox')});

workspace.addChangeListener(function(){
var code = Blockly.PHP.workspaceToCode(workspace);
window.document.getElementsByTagName("textarea")[0].value = code;
=======
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
>>>>>>> 85a7c0299e5c8e2da098b3378f20436781c34327
});
</script>
</body>
</html>