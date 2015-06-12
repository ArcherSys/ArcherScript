<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/includes/View.php";

require_once $_SERVER["DOCUMENT_ROOT"]."/includes/jQueryManager.php";
use ArcherSys\Viewer\Contrib\View;
use ArcherSys\Viewer\jQueryManager;
use ArcherSys\Viewer\TabsDefinition;
$archerscript = new View("ArcherScript",function(){
jQueryManager::addjQuery();
jQueryManager::addjQueryUI();


jQueryManager::addjQueryUICSS("main");
jQueryManager::addjQueryUICSS("structure");

jQueryManager::addjQueryUICSS("theme");

jQueryManager::addTabs("jscode","tabsa");

?>
<script src="/core/asosblockly/blockly_compressed.js"></script>
<script src="/core/asosblockly/blocks_compressed.js"></script>

<script src="/core/asosblockly/javascript_compressed.js"></script>
<script src="/core/asosblockly/msg/js/en.js"></script>

<script src="/developer/ace-builds/src-min/ace.js" type="text/javascript" charset="utf-8"></script>


<script type="text/javascript">
$(function(){ $("#accordion").accordion(); });</script>
<style>
    div[id^=editor]{
        width: 800px;
        height: 200px;
    }
</style>
<?php
},function(){

$jsblocks = new TabsDefinition("jscode",
array("archerscript-editorvis-js" => "ArcherScript",
"archerscript-editorcode-js" => "Javascript"),
array("archerscript-editorvis-js" => "<div id='blocklyDivJS' style='height: 480px; width: 1000px;'></div>",
"archerscript-editorcode-js" => "<div id='editorJS'></div>")
);
$jsblocks->render();
?>

<xml id="toolbox" style="display: none">
<block type="addapplication"></block>


</xml>


<script type="text/javascript" src="script.js"></script>
<script src="http://localhost/storage.js"></script>
<script type="text/javascript">
$(function(){

Blockly.Blocks['addapplication'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("ArcherSysOS.Applications.create");
    this.appendValueInput("appobject")
        .setCheck("Array")
        .appendField(new Blockly.FieldVariable("AppObject"), "app_object");
   this.setInputsInline(true);
    this.setPreviousStatement(true);
    this.setNextStatement(true);
    this.setColour(20);
    this.setTooltip('');
    this.setHelpUrl('http://www.example.com/');
  }
};

Blockly.JavaScript['addapplication'] = function(block) {
  var value_appobject = Blockly.JavaScript.valueToCode(block, 'appobject', Blockly.JavaScript.ORDER_ATOMIC);
  var variable_app_object = Blockly.JavaScript.variableDB_.getName(block.getFieldValue('app_object'), Blockly.Variables.NAME_TYPE);
  
  // TODO: Assemble JavaScript into code variable.
  var code = "ArcherSysOS.Applications['"+  + "'] = null;";
  return code;
};
  var workspace = Blockly.inject('blocklyDivJS',
      {toolbox: window.document.getElementById('toolbox')});
var editor = ace.edit("editorJS");
workspace.addChangeListener(function(){
var code = Blockly.JavaScript.workspaceToCode(workspace);



var textarea = $('textarea[name=editorJS]').hide();
editor.getSession().setValue(code);
editor.getSession().on('change', function(){
  textarea.val(editor.getSession().getValue());
  
});
});
});
</script>
<textarea name='editor'></textarea>
<?php
});

?>