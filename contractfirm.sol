pragma solidity ^0.4.0 ;

contract contractfirm{
    
    address admin;
   
    //maps the index to the network address
    mapping( uint64 => address ) caddress; 
    //maps the network address with the cryptocurrency in the account
    mapping(address=> uint64) money;
    //maps the network address with the blocked cryptocurrency in the account
    mapping(address=> uint64) blocked_money;
    
    uint64 k;
    
    mapping(uint64=> uint64)p; 
    
    
    // array to store the time ::
    uint256[] public contract_time;
    uint256[] public duration; 
    uint64[] public price;
    uint64[] public consumer; 
       
    
    // Constructor to assign the address to the admin
    function contractfirm(){
        admin = msg.sender ;
		price.push(1);
        k=0;
    }
    
    function register(uint64 index) returns(bool){
        
        if(caddress[index]==0){
            caddress[index]=msg.sender;
            money[msg.sender]=10000;
            blocked_money[msg.sender]=0;
            return true;
        }
        else{ 
            return false;
        } 
    }
    
	function getPrice( uint8 i ) returns( uint64 ){
		return price[i];
	}
	
    function transact(uint64 index,uint64 pal,uint64 caution_money,uint64 proposal, uint256 time) returns(bool ){
        if( ((money[msg.sender]-blocked_money[msg.sender])>=(pal+caution_money)) && ((money[caddress[index]]-blocked_money[caddress[index]])>=(caution_money))){
            blocked_money[msg.sender]+=pal+caution_money;
            blocked_money[caddress[index]]+=caution_money;
            
            p[proposal]=k;
            contract_time.push(now);
            duration.push(time);
            
            consumer.push(index); 
            k++;
            
            return true;
        }
        else return false;
        
    }
    
    function checktransact(uint64 index, uint64 proposal) returns (uint64) {
        
        uint64 actual=p[proposal];
        if (now-contract_time[actual] >= duration[actual]*60){
            money[msg.sender]-=price[actual]; 
            return money[msg.sender];
        }
        else{
            money[msg.sender]+=price[actual];
            return money[msg.sender];
    }
    }
    
}