/*Write a program that asks the user to enter four integer numbers. Assign these four numbers to a
multidimensional array (2x2). Print the matrix to the screen before you transpose it. Print also the
transposed matrix to the screen*/

#include <stdio.h>
// define prototype
void printMatrix(const int [][2]);
void transposeMatrix(int [][2]);
int main(void)
{
    // declare Matrix (2,2) -> two dimensional array
    int matrix[2][2];
    // print text to screen
    printf("Enter four values ");
    scanf("%d %d %d %d", &matrix[0][0], &matrix[0][1], &matrix[1][0],
     &matrix[1][1]);
    printf("\n");
    // print the matrix to the screen
    printMatrix((const int(*)[]) matrix);
    // transpose the matrix
    transposeMatrix(matrix);
    // print the matrix to the screen
    printMatrix((const int(*)[]) matrix);
    return 0;
}
// prints the matrix to the screen
void printMatrix(const int mat[][2])
{
    int i, j;

    for(i = 0; i < 2; i++)
        {
            printf("| ");
            for(j = 0; j < 2; j++)
            printf("%d ", mat[i][j]);
            printf("|\n");
        }
    printf("\n");
}
// transposes the matrix
void transposeMatrix(int mat[][2])
{
    int matrix[2][2];

    int i, j;

    for(i = 0; i < 2; i++)
        for(j = 0; j < 2; j++)
            matrix[j][i] = mat[i][j];

    for(i = 0; i < 2; i++)
        for(j = 0; j < 2; j++)
            mat[i][j] = matrix[i][j];
}
