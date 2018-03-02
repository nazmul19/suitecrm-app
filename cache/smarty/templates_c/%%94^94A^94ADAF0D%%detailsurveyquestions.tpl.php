<?php /* Smarty version 2.6.29, created on 2018-03-01 06:26:43
         compiled from modules/Surveys/tpls/detailsurveyquestions.tpl */ ?>
<div>
    <span class="required validation-message"><?php echo $this->_tpl_vars['message']; ?>
</span>
    <table id="questionTable" class="table table-bordered">
        <tr>
            <th>
                Question
            </th>
            <th>
                Text
            </th>
            <th>
                Type
            </th>
        </tr>
        <?php $_from = $this->_tpl_vars['questions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['question']):
?>
            <tr>
                <td>
                    Q<?php echo $this->_tpl_vars['question']['sort_order']+1; ?>

                </td>
                <td>
                    <?php echo $this->_tpl_vars['question']['name']; ?>

                </td>
                <td>
                    <?php echo $this->_tpl_vars['question']['type']; ?>

                </td>
            </tr>
        <?php endforeach; endif; unset($_from); ?>
    </table>
</div>