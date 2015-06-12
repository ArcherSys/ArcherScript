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
<category id="catLists" name="Lists">
<block type="lists_create_empty"></block>
<block type="lists_create_with"></block>
<block type="lists_split">

      </block>
<block type="lists_getIndex">
        <value name="VALUE">
          <block type="variables_get">
            <field name="VAR" class="listVar">list</field>
          </block>
        </value>
      </block>
<block type="lists_isEmpty"></block>
<block type="lists_length"></block>
<block type="lists_getSublist">
        <value name="LIST">
          <block type="variables_get">
            <field name="VAR" class="listVar">list</field>
          </block>
        </value>
      </block>
        <value name="DELIM">
          <block type="text">
            <field name="TEXT">,</field>
          </block>
        </value>
</category>

<category id="catLoops" name="Loops">
<block type="controls_if"></block>
<block type="controls_if_else"></block>
<block type="controls_forEach"></block>
<block type="controls_whileUntil"></block>
<block type="controls_flow_statements"></block>
<block type="controls_repeat_ext">
        <value name="TIMES">
          <block type="math_number">
            <field name="NUM">10</field>
          </block>
        </value>
      </block>
<block type="controls_for">
        <value name="FROM">
          <block type="math_number">
            <field name="NUM">1</field>
          </block>
        </value>
        <value name="TO">
          <block type="math_number">
            <field name="NUM">10</field>
          </block>
        </value>
        <value name="BY">
          <block type="math_number">
            <field name="NUM">1</field>
          </block>
        </value>
      </block>
</category>
<category id="catOOP" name="Object Oriented Programming">
  <block type="class"></block>
  
  <block type="abstractclass"></block>

  <block type="namespacelv1"></block>
  <block type="member"></block>
  <block type="private_method"></block>
  <block type="method"></block>
</category>
<category id="catMath" name="Math">
  <block type="math_number"></block>
  <block type="math_arithmetic"></block>
<block type="math_single"></block>
</category>
<category id="catText" name="String">
  <block type="text"></block>
<block type="text_charAt">
        <value name="VALUE">
          <block type="variables_get">
            <field name="VAR" class="textVar">text</field>
          </block>
        </value>
      </block>
<block type="text_append">
        <value name="TEXT">
          <block type="text"></block>
        </value>
      </block>
<block type="text_length"></block>
<block type="text_isEmpty"></block>
<block type="text_trim"></block>
<block type="text_print"></block>
<block type="text_getSubstring">
        <value name="STRING">
          <block type="variables_get">
            <field name="VAR" class="textVar">text</field>
          </block>
        </value>
      </block>
      </block>
<block type="text_changeCase"></block>
<block type="text_prompt_ext">
        <value name="TEXT">
          <block type="text"></block>
        </value>
      </block>
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
<script type="text/javascript" src="blocks.js">

</script>
<textarea name='editorPHP'></textarea>
<?php
});
?>