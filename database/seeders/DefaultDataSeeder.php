<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Event;
use App\Models\Job;
use App\Models\LatestTech;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DefaultDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createCourseCategories();
        $this->createCourses();
        $this->createEvents();
        $this->createJobs();
        $this->createLatestTechs();

    }

    private function createCourses()
    {
        $courses = [
            [
                'title' => 'Cisco Certified Network Association (CCNA)',
                'course_category_id' =>  '1',
                'description' => 'CCNA (Cisco Certified Network Associate) is a popular certification for computer network engineers provided by the company named Cisco Systems. It is valid for all types of engineers including entry-level network engineers, network administrators, network support engineers and network specialists. It helps to become familiar with broad range of networking concepts like OSI models, IP addressing, Network security, etc. Provide thorough knowledge and hands-on training for cisco Router basic and advances routing capabilities for small and medium size networks Upon completion of the course you will be able to plan, implement, adjust and debug routed cisco RouterOS network configurations.',
                'total_class' => 20,
                'image' => '',
                'slug' => '',
                'status' => 1,
            ],
            [
                'title' => 'MikroTik Certified Network Association (MTCNA)',
                'course_category_id' =>  '1',
                'description' => 'The MTCNA (Mikrotik Certified Network Associate) training course will provide you with the skills to configure a MikroTik Router OS Router Board as a dedicated router, a bandwidth manager, a secure firewall appliance, a simple wireless access point, a VPN Server or Client or an Internet Hotspot concentrator etc. This course will cover the entire MTCNA requirements as set by Mikrotik. This is the first level of certification that needs to be obtained if you are looking to get the more advanced certifications. This will help you prepare for the Mikrotik mtcna exam. You will also be familiar with all the features of Mikrotik and how to configure them for most networks. We will be setting up and configuring the firewall filter rules, Nat rules. We will also be looking at the more basic setting up and configuration of the Mikrotik routers.',
                'total_class' => 10,
                'image' => '',
                'slug' => '',
                'status' => 1,
            ],
            [
                'title' => 'MikroTik Certified Routing Engineer (MTCRE) ',
                'course_category_id' =>  '1',
                'description' => 'A focused study of the routing protocols that MikroTik RouterOS has to offer. The vast majority of theory is backed up by labs and practical implementation giving a robust experience of using VLAN, VPN and OSPF in a MikroTik environment.',
                'total_class' => 10,
                'image' => '',
                'slug' => '',
                'status' => 1,
            ],
            [
                'title' => 'Installing and Configuring Windows 10',
                'course_category_id' =>  '1',
                'description' => 'Configuration is the manner in which components are arranged to make up the computer system. Configuration consists of both hardware and software components. Sometimes, people specifically point to hardware arrangement as hardware configuration and to software components as software configuration. Understanding of computer configuration is important as for certain hardware or software applications, a minimum configuration are required.',
                'total_class' => 12,
                'image' => '',
                'slug' => '',
                'status' => 1,
            ],
            [
                'title' => 'Installing and Configuring Windows Server',
                'course_category_id' =>  '1',
                'description' => 'A server configuration defines a specific database as the repository for its data. To prevent corruption, that database can be associated with only one server configuration. However, that database can be used by other applications.',
                'total_class' => 15,
                'image' => '',
                'slug' => '',
                'status' => 1,
            ],
            [
                'title' => 'Administering Windows Server ',
                'course_category_id' =>  '1',
                'description' => 'Windows Server Administration is an advanced computer networking topic that includes server installation and configuration, server roles, storage, Active Directory and Group Policy, file, print, and web services, remote access, virtualization, application servers, troubleshooting, performance, and reliability.',
                'total_class' => 15,
                'image' => '',
                'slug' => '',
                'status' => 1,
            ],
            [
                'title' => 'Configuring Advanced Windows Server Services',
                'course_category_id' =>  '1',
                'description' => 'Advanced server is aimed at being a network operating system server and/or an application server, including those involving large databases. This server facilitates clustering and load-balancing. NT 4.0 servers with up to eight-way SMP can upgrade to this product.',
                'total_class' => 15,
                'image' => '',
                'slug' => '',
                'status' => 1,
            ],
            [
                'title' => 'Red Hat Certified System Administration (RHCSA)',
                'course_category_id' =>  '1',
                'description' => 'Red Hat Systems Administrators, who work on Linux operating systems, configure, implement, and deploy systems and take care of security issues, besides managing system backups and adding and removing users. They will be part of a team that handles daily tickets and devises and implements technology solutions.',
                'total_class' => 10,
                'image' => '',
                'slug' => '',
                'status' => 1,
            ],
            [
                'title' => 'Red Hat Certified Engineer (RHCE) ',
                'course_category_id' =>  '1',
                'description' => 'Red Hat Server Administration is designed for IT professionals without previous Linux system administration experience. The course provides students with Linux administration competence by focusing on core administration tasks. This course also provides a foundation for students who plan to become full-time Linux system administrators by introducing key command-line concepts and enterprise-level tools.',
                'total_class' => 10,
                'image' => '',
                'slug' => '',
                'status' => 1,
            ],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }

    private function createEvents()
    {
        $events = [
            [
                'title' => 'Campus clean workshop',
                'description' => 'Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.',
                // 'image' => '',
                'date' => '2024-01-01',
                'start_time' => '10:30',
                'end_time' => '',
                'location' => 'Dhaka',
                'status' => 1,
            ],
            [
                'title' => 'Tech Summit',
                'description' => 'Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.',
                // 'image' => '',
                'date' => '2024-02-22',
                'start_time' => '12:30',
                'end_time' => '',
                'location' => 'Chittagong',
                'status' => 1,
            ],
            [
                'title' => 'Enviroement conference',
                'description' => 'Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.',
                // 'image' => '',
                'date' => '2023-09-22',
                'start_time' => '11:00',
                'end_time' => '',
                'location' => 'Chittagong',
                'status' => 1,
            ],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }

    private function createJobs()
    {
        $jobs = [
            [
                'title' => 'Tanvir',
                'image' => '',
                'company_name' => 'Google',
                'designation' => 'Senior Software Engineer',
                'status' => 1,
            ],
            [
                'title' => 'Rubel',
                'image' => '',
                'company_name' => 'Google',
                'designation' => 'Senior Software Engineer',
                'status' => 1,
            ],
            [
                'title' => 'Shuvo',
                'image' => '',
                'company_name' => 'Google',
                'designation' => 'Senior Software Engineer',
                'status' => 1,
            ],
            [
                'title' => 'Abbas',
                'image' => '',
                'company_name' => 'Google',
                'designation' => 'Senior Software Engineer',
                'status' => 1,
            ],
        ];

        foreach ($jobs as $job) {
            Job::create($job);
        }
    }

    private function createLatestTechs()
    {
        $latestTechs = [
            [
                'title' => 'Tips to grade high cgpa in university life',
                'image' => '',
                'description' => 'Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt .',
                'status' => 1,
            ],
            [
                'title' => 'Intellectual communication',
                'image' => '',
                'description' => 'Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt .',
                'status' => 1,
            ],
            [
                'title' => 'Study makes you perfect',
                'image' => '',
                'description' => 'Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt .',
                'status' => 1,
            ],
            [
                'title' => 'Technology edcution is now....',
                'image' => '',
                'description' => 'Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt .',
                'status' => 1,
            ],
        ];

        foreach ($latestTechs as $latestTech) {
            LatestTech::create($latestTech);
        }
    }

    private function createCourseCategories()
    {
        $courseCategories = [
            [
                'title' => 'Networking',
                'image' => '',
                'status' => 1,
            ],
            [
                'title' => 'Graphics',
                'image' => '',
                'status' => 1,
            ],

        ];

        foreach ($courseCategories as $courseCategory) {
            CourseCategory::create($courseCategory);
        }
    }
}
