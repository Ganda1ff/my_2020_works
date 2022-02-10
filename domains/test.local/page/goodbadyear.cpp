#define _CRT_SECURE_NO_WARNINGS
#include <stdio.h>
int main() {
int year;
int triger = 1;
while(triger){
scanf("%d", &year);

if (year >= 1900 && year <= 2000) {
printf("OK\n");
triger = 0;

}
else {
printf("BAD YEAR\n");
}
}
}