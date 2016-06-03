<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH.
class IndexController extends pm_Controller_Action
{
    protected $_accessLevel = 'admin';

    public function indexAction()
    {

    }

    public function enabledebugAction()
    {
//        if ($this->_request->isPost()) {
            $result = pm_ApiCli::callSbin("enable-debug.cmd");
            if ($result['code'] !== 0) {
                $this->_status->addError("Failed to enable debug logging: {$result['stdout']} {$result['stderr']}");
            } else {
                $this->_status->addMessage('info', 'Debug logging enabled.');
            }
//        }
        $this->_redirect('index/index');
    }

    public function disabledebugAction()
    {
//        if ($this->_request->isPost()) {
            $result = pm_ApiCli::callSbin("disable-debug.cmd");
            if ($result['code'] !== 0) {
                $this->_status->addError("Failed to enable debug logging: {$result['stdout']} {$result['stderr']}");
            } else {
                $this->_status->addMessage('info', 'Debug logging disabled.');
            }
//        }
        $this->_redirect('index/index');
    }
}