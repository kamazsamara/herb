<?php
// Existing code
interface Interface_Output_Document
{
    public function send($id,$messenger,$request);
    public function result();
}

/**
* Sticker class
* Receive documents
* 
* @package files
* @subpackage Abstract user documents classes
*/
abstract class Output_Document implements Interface_Output_Document
{  
    abstract protected function send_to_api($request);
	
	public void function  send($id,$messenger,$request)
	{
		$this->user_id = (int)$id;
		$this->send_to_api($messenger,$request);
	}
	
	public function result()
	{
		return $this->result_request;
	}

}
// Existing code (end)

// New code

/**
* Sticker class
* Sending one sticker 
* Insert to 2655
* 
* @package files
* @subpackage User documents classes
*/
class Sticker extends Output_Document 
{
	private $sticker_id = "CAADAgADKAADPYjoDJ9mank_pFCOFgQ"; 
	public $user_id = 0;
	public $result_request = "";
	
	protected function send_to_api($messenger,$request=false)
	{
		$this->result_request = $messenger->apiRequest('sendSticker', array('chat_id' => $this->user_id, 'sticker' => $this->sticker_id));
	}
}

?>