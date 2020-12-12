/*
      Takes an Array and a position that must be with the array
      Walks forward and backward in the array with next and prev functions, respectively

      if next exceeds array size then returns the 0th element
      if prev becomes negative then returns the last element
*/ 



function CircularList(list, position)
{
      if(list==null || !Array.isArray(list))
            return null;

      this.m_List=list;



      if(position==null || Number.isInteger(position)==false)
            this.m_Position=-1;
      else 
            this.m_Position=position;




      this.next=function()
      {
          
          this.m_Position=this.m_Position + 1;
          
          if(this.m_Position>=this.m_List.length)
              this.m_Position=0;
            
          
            return this.m_List[this.m_Position];
      };


      this.prev=function()
      {
          this.m_Position=this.m_Position -1;
          
          if(this.m_Position<0)
              this.m_Position=this.m_List.length-1;
            
          
            return this.m_List[this.m_Position];
      };


      this.cur=function()
      {
          if(this.m_Position<0)
              this.m_Position=this.m_List.length-1;
          
          else if(this.m_Position>=this.m_List.length)
              this.m_Position=0;
          
          return this.m_List[this.m_Position];
      };
      
      
      this.randomizePosition=function()
      {
          this.m_Position=Math.floor(Math.random()* this.m_List.length);
      };
}
