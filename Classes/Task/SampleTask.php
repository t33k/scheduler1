<?php

namespace V\Scheduler1\Task;


class SampleTask extends \TYPO3\CMS\Scheduler\Task\AbstractTask {

	public function execute() {

		$failrue = rand(0,1);
		if($failrue) {
			throw new \RuntimeException('An random error occured in the simplest task ever', 20394823948);
		} else {
			$success = TRUE;
		}
		return $success;
	}

}