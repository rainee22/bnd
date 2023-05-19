<?php

namespace App\Http\Livewire\Main\Components;

use Livewire\Component;

class Faq extends Component
{
    public $left_questions = [
        [
            'question'=> 'What services do you offer?',
            'answer'=> 'We offer a range of services, including IT strategy consulting, 
                        software development, cybersecurity, cloud computing, data analytics, 
                        and project management.'
        ],
        [
            'question'=> 'How experienced are your consultants?',
            'answer'=> 'Our consultants have a range of experience levels, from junior consultants 
                        to senior-level experts. We pride ourselves on hiring highly qualified 
                        professionals with a diverse range of skills and expertise.'
        ],
        [
            'question'=> 'What is your pricing structure?',
            'answer'=> 'Our pricing structure varies depending on the scope and complexity of the project. 
                        We typically offer a mix of fixed-price and time-and-materials billing options.'
        ],
        [
            'question'=> 'How do you ensure the security of client data?',
            'answer'=> 'We have a comprehensive security program in place, which includes regular 
                        security assessments, data encryption, access controls, and employee training.'
        ],
        [
            'question'=> 'What kind of support do you offer after the completion of a project?',
            'answer'=> 'We offer ongoing support and maintenance services to ensure the continued success 
                        of the project. This includes bug fixes, upgrades, and enhancements.'
        ],
    ];

    public $right_questions = [
        [
            'question'=> 'Can you provide references or case studies from previous clients?',
            'answer'=> 'Yes, we can provide references and case studies upon request. 
                        We have a track record of successful projects and satisfied clients.'
        ],
        [
            'question'=> 'How do you stay up-to-date with the latest technology trends?',
            'answer'=> 'We have a culture of continuous learning and development. Our consultants 
                        attend conferences, training sessions, and workshops to stay up-to-date with 
                        the latest technology trends.'
        ],
        [
            'question'=> 'What is your approach to project management?',
            'answer'=> 'We use a range of project management methodologies, including Agile, Waterfall, 
                        and Hybrid, depending on the needs of the project. We prioritize clear 
                        communication, regular status updates, and proactive risk management.'
        ],
        [
            'question'=> 'How do you measure the success of your projects?',
            'answer'=> 'We use a range of metrics to measure the success of our projects, including 
                        on-time delivery, budget adherence, customer satisfaction, and business value 
                        delivered.'
        ],
        [
            'question'=> 'How long does it typically take to complete a project?',
            'answer'=> 'The duration of a project varies depending on the scope and complexity of the 
                        project. We provide project timelines and milestones at the outset of the project 
                        and prioritize meeting or exceeding those timelines.'
        ],
    ];

    public function render()
    {
        return view('livewire.main.components.faq')->extends('layouts.app');
    }
}
