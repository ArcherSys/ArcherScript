<!DOCTYPE HTML>
<html>
<head>
<title>ArcherScript</title>
<script src="/core/js/jquery.js"></script>
<script src="/core/asosblockly/blockly_compressed.js"></script>
<script src="/core/asosblockly/blocks_compressed.js"></script>

<script src="/core/asosblockly/php_compressed.js"></script>
<script src="/core/asosblockly/msg/js/en.js"></script>
</head>
<body>
<div id="blocklyDiv" style="height: 480px; width: 800px;"></div>
<xml id="toolbox" style="display: none">
<category id="catControl">
    <block type="controls_if"></block>
    <block type="controls_whileUntil"></block>
</category>
  <category id="catLogic">
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
</category>

<category id="catVariables">
  <block type="variables_set"></block>
  <block type="variables_get"></block>
</category>

</xml>
<form name="coder">
<textarea name="code"></textarea>
</form>
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
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.Blocks['addjquery'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("jQueryManager::addjQuery");
    this.setPreviousStatement(true);
    this.setColour(120);
    this.setTooltip('');
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.PHP['addjquery'] = function(block) {
  // TODO: Assemble PHP into code variable.
  var code = 'jQueryManager::addjQuery();';
  return code;
};
Blockly.PHP['defineview'] = function(block) {
  var value_title = Blockly.PHP.valueToCode(block, 'Title', Blockly.PHP.ORDER_ATOMIC);
  var statements_head = Blockly.PHP.statementToCode(block, 'head');
  var statements_body = Blockly.PHP.statementToCode(block, 'body');
  // TODO: Assemble PHP into code variable.
  var code = '$view = new View(' + value_title + ',function(){'+ statements_head + '\n},function(){'+'});	';
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
  var code = 'HeaderManager::addH1('+text_heading +');';
  return code;
};



  var workspace = Blockly.inject('blocklyDiv',
      {toolbox: window.document.getElementById('toolbox')});

workspace.addChangeListener(function(){
var code = Blockly.PHP.workspaceToCode(workspace);
window.document.getElementsByTagName("textarea")[0].value = code;
});
</script>
</body>
</html>