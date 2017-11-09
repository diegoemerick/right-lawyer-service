<?php

namespace Tests\Feature;

use App\Infrasctructure\Repository\LawyerRepository;
use App\Service\LawyerService;
use Tests\TestCase;

class LawyerServiceTest extends TestCase
{
    public function testCreateLawyer()
    {
        $lawyerService = new LawyerService(
            $this->getRepositoryMock()
        );

        $lawyer = $lawyerService->create($this->getLawyerMock());
        $this->assertEquals($lawyer, $this->getLawyerMock());
    }

    public function testUpdateLawyer()
    {
        $lawyerService = new LawyerService(
            $this->getRepositoryMock()
        );

        $lawyer = $lawyerService->update($this->getLawyerMock(), 1);
        $this->assertEquals($lawyer['id'], 1);
    }

    public function testDeleteLawyer()
    {
        $lawyerService = new LawyerService(
            $this->getRepositoryMock()
        );

        $lawyer = $lawyerService->delete(1);
        $this->assertTrue($lawyer === 1, "success");
    }

    public function testIndexLawyer()
    {
        $lawyerService = new LawyerService(
            $this->getRepositoryMock()
        );

        $lawyer = $lawyerService->index();
        $this->assertTrue($lawyer === [], "success");
    }

    private function getRepositoryMock()
    {
        $client = $this->getMockBuilder(LawyerRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        $client->method('index')
            ->willReturn([]);

        $client->method('create')
            ->willReturn($this->getLawyerMock());

        $client->method('update')
            ->willReturn($this->getLawyerMock());

        $client->method('delete')
            ->willReturn(1);

        return $client;
    }

    private function getLawyerMock()
    {
        return [
            "id" => 1,
            "name" => "Diego Emerick",
            "phone" => "319923239",
            "mail" => "netoemerick@hotmail.com",
            "document" => "12345678971",
            "deleted_at" => null,
            "created_at" => "2017-11-09 01:46:32",
            "updated_at" => "2017-11-09 01:46:32"
        ];
    }
}
