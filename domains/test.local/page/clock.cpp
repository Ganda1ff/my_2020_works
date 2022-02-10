#include <stdio.h>

int main() {
  int a, b, c;
  scanf("%d", &a);
b = a / 60;
c = a % 60;
printf("%d%d",&b,":",&c);
}