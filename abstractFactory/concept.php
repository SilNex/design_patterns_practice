<?php

// namespace AbstractFactory\Conceptual;

interface 추상팩토리
{
    public function 물건A생성(): 추상화A;

    public function 물건B생성(): 추상화B;
}

class 정형화팩토리1 implements 추상팩토리
{
    public function 물건A생성(): 추상화A
    {
        return new 물건정형화A1;
    }

    public function 물건B생성(): 추상화B
    {
        return new 물건정형화B1;
    }
}

class 정형화팩토리2 implements 추상팩토리
{
    public function 물건A생성(): 추상화A
    {
        return new 물건정형화A2;
    }

    public function 물건B생성(): 추상화B
    {
        return new 물건정형화B2;
    }
}

interface 추상화A
{
    public function A함수사용(): string;
}

class 물건정형화A1 implements 추상화A
{
    public function A함수사용(): string
    {
        return "물건정형화A1의 A함수 결과.";
    }
}

class 물건정형화A2 implements 추상화A
{
    public function A함수사용(): string
    {
        return "물건정형화A2의 A함수 결과.";
    }
}


interface 추상화B
{
    public function B함수사용(): string;

    public function 다른B함수사용(추상화A $결합자): string;
}

class 물건정형화B1 implements 추상화B
{
    public function B함수사용(): string
    {
        return "물건정형화B1의 B함수 결과.";
    }

    public function 다른B함수사용(추상화A $결합자): string
    {
        $result = $결합자->A함수사용();

        return "물건정형화B1의 B함수 결과와 ({$result})";
    }
}

class 물건정형화B2 implements 추상화B
{
    public function B함수사용(): string
    {
        return "물건정형화B2의 B함수 결과.";
    }

    public function 다른B함수사용(추상화A $결합자): string
    {
        $result = $결합자->A함수사용();

        return "물건정형화B2의 B함수 결과와 ({$result})";
    }
}


function clientCode(추상팩토리 $factory)
{
    $productA = $factory->물건A생성();
    $productB = $factory->물건B생성();

    echo $productB->B함수사용() . "\n";
    echo $productB->다른B함수사용($productA) . "\n";
}
echo "clientCode: 첫 팩토리 타입으로 클라이언트 코드 테스트:\n";
clientCode(new 정형화팩토리1);

echo "\n";

echo "clientCode: 두번째 팩토리 타입으로 같은 클라이언트 코드 테스트:\n";
clientCode(new 정형화팩토리2);