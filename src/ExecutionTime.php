<?php
	namespace AmanAngira\ExecutionTime;

	class ExecutionTime{
		private $startTime, $endTime;
	
		private function getStartTime(){
			return $this->startTime;
		}

		private function setStartTime($time){
			$this->startTime = $time;
			return $this;
		}

		private function getEndTime(){
			return $this->endTime;
		}

		private function setEndTime($time){
			$this->endTime = $time;
			return $this;
		}
		
		public function startTime(){
			$this->setStartTime( microtime(true) );
		}

		public function endTime(){
			$this->setEndTime( microtime(true) );
		}

		public function getTime(){
			$start = $this->getStartTime();
			$end = $this->getEndTime();
			if( !$start || !$end )
				$this->throwInvalidStartEndException();
			return $end - $start;
		}
		
		private function throwInvalidStartEndException(){
			throw new Exception( 'Invalid start and end time. Make sure you have invoked '. __CLASS__ . '::startTime() and ' . __CLASS__ . '::endTime() before invoking ' . __CLASS__ . '::getTime()');
		}
	}

