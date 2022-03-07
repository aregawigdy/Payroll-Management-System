
		var valsname=0,valslname=0,valsssn=0,valspos=0,valsbsal=0;
			function valsupName()
			{
				var fname=document.support.fName.value,i,chr,count=0;
				if(fname=="")
				{
					document.getElementById('na_message').innerHTML="This field is Recquired!".fontcolor("red").big();
				}
				else
				{
					for(i=0;i<fname.length;i++)
					{
						chr=fname.charAt(i);
						if((chr>="A"&&chr<="Z")||(chr>="a"&&chr<="z"))
						{
							count++;
						}
						if(count==fname.length)
						{
							document.getElementById('na_message').innerHTML="valid!".fontcolor("green").big();
							valsname=1;
						}
						else
						{
							document.getElementById('na_message').innerHTML="Invalid!".fontcolor("red").big();
						}
					}
				}
			}
			function valsupLname()
			{
				var lname=document.support.lName.value,i,chr,count=0;
				if(lname=="")
				{
					document.getElementById('lna_message').innerHTML="This field is Recquired!".fontcolor("red").big();
				}
				else
				{
					for(i=0;i<lname.length;i++)
					{
						chr=lname.charAt(i);
						if((chr>="A"&&chr<="Z")||(chr>="a"&&chr<="z"))
						{
							count++;
						}
						if(count==lname.length)
						{
							document.getElementById('lna_message').innerHTML="valid!".fontcolor("green").big();
							valslname=1;
						}
						else
						{
							document.getElementById('lna_message').innerHTML="Invalid!".fontcolor("red").big();
						}
					}
				}
			}
			function valsupSSN()
			{
				var ssn=document.support.SSNum.value,y,x,z;
				if(ssn=="")
				{
					document.getElementById('ssn_message').innerHTML="This field is Recquired!".fontcolor("red").big();
				}
				else
				{					
						document.getElementById('ssn_message').innerHTML="Valid!".fontcolor("green").big();
						valsssn=1;
				}
			}
			function valsupPos()
			{
				var position=document.support.pos.value,i,chr,count=0;
				if(position=="")
				{
					document.getElementById('pos_message').innerHTML="This field is Recquired!".fontcolor("red").big();
				}
				else
				{
					for(i=0;i<position.length;i++)
					{
						chr=position.charAt(i);
						if((chr>="A"&&chr<="Z")||(chr>="a"&&chr<="z"))
						{
							count++;
						}
						if(count==position.length)
						{
							document.getElementById('pos_message').innerHTML="valid!".fontcolor("green").big();
							valspos=1;
						}
						else
						{
							document.getElementById('pos_message').innerHTML="Invalid!".fontcolor("red").big();
						}
					}
				}
			}
			function valsupBsal()
			{
				var bsalary=document.support.bsal.value,i,chr,count=0;
				if(bsalary=="")
				{
					document.getElementById('bsal_message').innerHTML="This field is Recquired!".fontcolor("red").big();
				}
				else
				{
					for(i=0;i<bsalary.length;i++)
					{
						chr=bsalary.charAt(i);
						if((chr>="A"&&chr<="Z")||(chr>="a"&&chr<="z"))
						{
							count++;
						}
						if(count!=bsalary.length)
						{
							document.getElementById('bsal_message').innerHTML="valid!".fontcolor("green").big();
							valsbsal=1;
						}
						else
						{
							document.getElementById('bsal_message').innerHTML="Invalid!".fontcolor("red").big();
						}
					}
				}
			}
			
			function valsupForm()
			{
				if(valsname!=1||valslname!=1||valsssn!=1||valspos!=1||valbsal!=1)
				{
					alert("Please fill all fields correctly!!!");
				}
			}

			
	/*var valfschol=0,valfdept=0,valfname=0,valflname=0,valfssn=0,valfbsal=0;
function valfacName()
			{
				var ffname=document.faculty.fName.value,i,chr,count=0;
				if(ffname=="")
				{
					document.getElementById('fna_message').innerHTML="This field is Recquired!".fontcolor("red").big();
				}
				else
				{
					for(i=0;i<ffname.length;i++)
					{
						chr=ffname.charAt(i);
						if((chr>="A"&&chr<="Z")||(chr>="a"&&chr<="z"))
						{
							count++;
						}
						if(count==ffname.length)
						{
							document.getElementById('fna_message').innerHTML="valid!".fontcolor("green").big();
							valfname=1;
						}
						else
						{
							document.getElementById('fna_message').innerHTML="Invalid!".fontcolor("red").big();
						}
					}
				}
			}
			function valfacLname()
			{
				var flname=document.faculty.lName.value,i,chr,count=0;
				if(flname=="")
				{
					document.getElementById('flna_message').innerHTML="This field is Recquired!".fontcolor("red").big();
				}
				else
				{
					for(i=0;i<flname.length;i++)
					{
						chr=flname.charAt(i);
						if((chr>="A"&&chr<="Z")||(chr>="a"&&chr<="z"))
						{
							count++;
						}
						if(count==flname.length)
						{
							document.getElementById('flna_message').innerHTML="valid!".fontcolor("green").big();
							valflname=1;
						}
						else
						{
							document.getElementById('flna_message').innerHTML="Invalid!".fontcolor("red").big();
						}
					}
				}
			}
			function valfacSSN()
			{
				var fssn=document.faculty.SSNum.value,y,x,z;
				if(fssn=="")
				{
					document.getElementById('fssn_message').innerHTML="This field is Recquired!".fontcolor("red").big();
				}
				else
				{					
						document.getElementById('fssn_message').innerHTML="Valid!".fontcolor("green").big();
						valfssn=1;
				}
			}
			function valfacDept()
			{
				var depts=document.faculty.dcode.value,i,chr,count=0;
				if(depts=="")
				{
					document.getElementById('fdept_message').innerHTML="This field is Recquired!".fontcolor("red").big();
				}
				else
				{
					for(i=0;i<depts.length;i++)
					{
						chr=depts.charAt(i);
						if((chr>="A"&&chr<="Z")||(chr>="a"&&chr<="z"))
						{
							count++;
						}
						if(count==depts.length)
						{
							document.getElementById('fdept_message').innerHTML="valid!".fontcolor("green").big();
							valfdept=1;
						}
						else
						{
							document.getElementById('fdept_message').innerHTML="Invalid!".fontcolor("red").big();
						}
					}
				}
			}
			function valfacBsal()
			{
				var fbsalary=document.faculty.bsal.value,i,chr,count=0;
				if(fbsalary=="")
				{
					document.getElementById('fbsal_message').innerHTML="This field is Recquired!".fontcolor("red").big();
				}
				else
				{
					for(i=0;i<fbsalary.length;i++)
					{
						chr=fbsalary.charAt(i);
						if((chr>="A"&&chr<="Z")||(chr>="a"&&chr<="z"))
						{
							count++;
						}
						if(count!=fbsalary.length)
						{
							document.getElementById('fbsal_message').innerHTML="valid!".fontcolor("green").big();
							valfbsal=1;
						}
						else
						{
							document.getElementById('fbsal_message').innerHTML="Invalid!".fontcolor("red").big();
						}
					}
				}
			}
			function valfacScholar()
			{
				var schol=document.faculty.replay.value,i,chr,count=0;
				if(schol=="")
				{
					document.getElementById('fscho_message').innerHTML="This field is Recquired!".fontcolor("red").big();
				}
				else
				{
						if(schol=="yes"||schol=="Yes"schol=="YES"||schol=="no"||schol=="No"||schol=="NO")
						{
							document.getElementById('fscho_message').innerHTML="valid!".fontcolor("green").big();
							valfschol=1;
						}
						else
						{
							document.getElementById('fscho_message').innerHTML="Invalid!".fontcolor("red").big();
						}
				}
			}
			
			
			function valfacForm()
			{
				if(valfname!=1||valflname!=1||valfssn!=1||valfdept!=1||valfbsal!=1||valfschol!=1)
				{
					alert("Please fill all fields correctly!!!");
				}
			}*/
