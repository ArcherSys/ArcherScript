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
Blockly.Blocks['formentry'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("new Form(")
        .appendField(new Blockly.FieldTextInput("https://www.google.com/search"), "action ")
        .appendField(new Blockly.FieldTextInput("GET"), "method")
        .appendField(new Blockly.FieldTextInput("Save"), "submit")
        .appendField(");");
    this.setOutput(true, "object");
    this.setColour(20);
    this.setTooltip('');
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.PHP['formentry'] = function(block) {
  var text_action_ = block.getFieldValue('action ');
  var text_method = block.getFieldValue('method');
  var text_submit = block.getFieldValue('submit');
  // TODO: Assemble PHP into code variable.
  var code = ' new Form("' + text_action + '","' + text_method + '","' + text_submit + '")';
  return code;
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
Blockly.Blocks['abstractmethod'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("abstract function")
        .appendField(new Blockly.FieldTextInput("default"), "method_name")
        .appendField("(")
        .appendField(new Blockly.FieldTextInput("default"), "param1")
        .appendField(",")
        .appendField(new Blockly.FieldTextInput("default"), "param2")
        .appendField(")")
        .appendField(";");
    this.setPreviousStatement(true);
    this.setNextStatement(true);
    this.setColour(210);
    this.setTooltip('');
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.PHP['abstractmethod'] = function(block) {
  var text_method_name = block.getFieldValue('method_name');
  var text_param1 = block.getFieldValue('param1');
  var text_param2 = block.getFieldValue('param2');
  // TODO: Assemble PHP into code variable.
  var code = 'abstract method ' + text_method_name + '(' + text_param1 + ',' + text_param2 + ');';
  return code;
};
Blockly.Blocks['definecallable'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("public  callable ")
        .appendField(new Blockly.FieldTextInput("default"), "callable name");
    this.setPreviousStatement(true, "object");
    this.setNextStatement(true);
    this.setColour(65);
    this.setTooltip('');
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.PHP['definecallable'] = function(block) {
  var text_callable_name = block.getFieldValue('callable name');
  // TODO: Assemble PHP into code variable.
  var code = 'public callable $'+ text_callable_name+';';
  return code;
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
Blockly.Blocks['addimage'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("new Image(");
    this.appendValueInput("src")
        .setCheck("String")
        .appendField("Source");
    this.appendValueInput("alt")
        .setCheck("String")
        .appendField("Alt");
    this.appendValueInput("id")
        .setCheck("String")
        .appendField("IDt");
    this.appendDummyInput()
        .appendField(");");
    this.setOutput(true);
    this.setTooltip('');
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.PHP['addimage'] = function(block) {
  var value_src = Blockly.PHP.valueToCode(block, 'src', Blockly.PHP.ORDER_ATOMIC);
  var value_alt = Blockly.PHP.valueToCode(block, 'alt', Blockly.PHP.ORDER_ATOMIC);
  var value_id = Blockly.PHP.valueToCode(block, 'id', Blockly.PHP.ORDER_ATOMIC);
  // TODO: Assemble PHP into code variable.
  var code = 'new Image("' + value_src + '","'+value_alt+'","'+value_id+'");';
  // TODO: Change ORDER_NONE to the correct strength.
  return [code, Blockly.PHP.ORDER_NONE];
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
Blockly.Blocks['abstractclass'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("abstract class ")
        .appendField(new Blockly.FieldTextInput("default"), "class_name");
    this.appendStatementInput("code")
        .appendField("{");
    this.appendDummyInput()
        .appendField("}");
    this.setPreviousStatement(true);
    this.setNextStatement(true);
    this.setColour(160);
    this.setTooltip('');
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.PHP['namespacelv1'] = function(block) {
  var text_name = block.getFieldValue('namespace');
  // TODO: Assemble PHP into code variable.
  var code = 'namespace ' + text_name + ';\n';
  return code;
};
Blockly.Blocks['namespacelv1'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("namespace ")
        .appendField(new Blockly.FieldTextInput("namespace_name"), "NAME");
    this.setPreviousStatement(true);
    this.setNextStatement(true);
    this.setColour(120);
    this.setTooltip('');
    this.setHelpUrl('http://www.example.com/');
  }
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
Blockly.PHP['abstractclass'] = function(block) {
    var text_class_name = block.getFieldValue('class_name');
    var statements_code = Blockly.PHP.statementToCode(block, 'code');
    // TODO: Assemble PHP into code variable.
    var code = 'abstract class ' + text_class_name + ' {\n ' + statements_code + '\n }\n';
    return code;
};
  var workspace = Blockly.inject('blocklyDiv',
      {toolbox: window.document.getElementById('toolboxPHP'),grid:
         {spacing: 20,
          length: 3,
          colour: '#ccc',
          snap: true},
     trashcan: true});
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