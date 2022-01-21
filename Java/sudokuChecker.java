class Main
{
	public static void main(Strings[] args)
	{
		boolean correct = true; 
		int[][] testBoard = {                   // Fill the matrix with your sudoku and the program will check if it's correctly filled
		  {, , , , , , , , },
		  {, , , , , , , , },
		  {, , , , , , , , },
		  {, , , , , , , , },
		  {, , , , , , , , },
		  {, , , , , , , , },
		  {, , , , , , , , },
		  {, , , , , , , , },
		  {, , , , , , , , } 
		};
		
		// rows
		for(int i = 0; i < 9; i++){
			for(int j = 0; j < 8; j++){
				for(int k = j + 1; k < 9; k++){
					if(testBoard[i][j]==testBoard[i][k]){
						correct = false;
					}
				}
			}
		}

		// columns
		for(int j = 0; j < 9; j++){
			for(int i = 0; i < 8; i++){
				for(int k = j + 1; k < 9; k++){
					if(testBoard[i][j]==testBoard[k][j]){
						correct = false;
					}
				}
			}
		}

		// 3x3
		for(int i = 0; i < 9; i += 3){
			for(int j = 0; j < 9; j += 3){
				for(int k = 0; k < 8; k++){
					for(int l = k + 1; l < 9; l++){
						if((testBoard[i + k%3][j + k/3]==(testBoard[i + l%3][j + l/3]){
							correct = false;
						}
					}
				}
			}
		}							
			
		if(correct == false){
			System.out.println("Sudoku is incorrectly filled");
		} else{
			System.out.println("Sudoku is correctly filled");
		}
	}
}
