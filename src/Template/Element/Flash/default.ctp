<?php
$class = 'message';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="<?= h($class) ?>" onclick="this.classList.add('hidden');"><?= $message ?></div>
<style>
	
div.message {
    text-align: center;
    cursor: pointer;
    display: block;
    font-weight: normal;
    padding: 0 1.5rem 0 1.5rem;
    transition: height 300ms ease-out 0s;
    background-color: #a0d3e8;
    color: #626262;
    top: 15px;
    right: 15px;
    z-index: 999;
    overflow: hidden;
    height: 50px;
    line-height: 2.5em;
    box-radius: 5px;
}

div.message:before {
    line-height: 0px;
    font-size: 20px;
    height: 12px;
    width: 12px;
    border-radius: 15px;
    text-align: center;
    vertical-align: middle;
    display: inline-block;
    position: relative;
    left: -11px;
    background-color: #FFF;
    padding: 12px 14px 12px 10px;
    content: "i";
    color: #a0d3e8;
}

div.message.error {
    background-color: #C3232D;
    color: #FFF;
}

div.message.error:before {
    padding: 11px 16px 14px 7px;
    color: #C3232D;
    content: "x";
}
div.message.hidden {
    height: 0;
}

</style>