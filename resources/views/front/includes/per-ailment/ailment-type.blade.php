@php
    $ailmentDetail = [
        [
            'name' => 'Achilles Tendon Injury',
            'type' => 'Types',
            'description' => 'Achilles tendon injuries can be categorized into several types based on severity and location',
            'points' => [
                ['head' => 'Tendinitis', 'point' => 'Inflammation of the tendon'],
                ['head' => 'Tendinosis', 'point' => 'Degenerative condition of the tendon'],
                ['head' => 'Partial tears', 'point' => 'Incomplete rupture of tendon fibers'],
                ['head' => 'Complete rupture', 'point' => 'Full separation of the tendon'],
                ['head' => 'Insertional tendinitis', 'point' => 'Inflammation at heel attachment']
            ]
        ],
        [
            'name' => 'Achilles Tendon Injury',
            'type' => 'Symptoms',
            'description' => 'Common signs and symptoms of Achilles tendon injuries include',
            'points' => [
                ['head' => 'Severe pain', 'point' => 'In back of heel'],
                ['head' => 'Swelling and stiffness', 'point' => ''],
                ['head' => 'Difficulty', 'point' => 'Walking or climbing stairs'],
                ['head' => 'Weakness', 'point' => 'In the affected leg'],
                ['head' => 'Popping sound', 'point' => 'During injury']
            ]
        ],
        [
            'name' => 'Achilles Tendon Injury',
            'type' => 'Causes',
            'description' => 'Achilles tendon injuries can occur due to various factors',
            'points' => [
                ['head' => 'Sudden increase', 'point' => 'In physical activity'],
                ['head' => 'Lack', 'point' => 'Of proper warm-up'],
                ['head' => 'Sports', 'point' => 'Requiring quick starts and stops'],
                ['head' => 'Age-related', 'point' => 'Tendon degeneration'],
                ['head' => 'Poor', 'point' => 'Footwear choices']
            ]
        ],
        [
            'name' => 'Achilles Tendon Injury',
            'type' => 'Risk Factor',
            'description' => 'Several factors can increase the risk of developing Achilles tendon injuries',
            'points' => [
                ['head' => 'Age', 'point' => '(more common in older adults)'],
                ['head' => 'Participating', 'point' => 'In high-impact sports'],
                ['head' => 'Certain medications', 'point' => 'Like fluoroquinolones'],
                ['head' => 'Being', 'point' => 'Overweight or obese'],
                ['head' => 'Having', 'point' => 'Tight calf muscles']
            ]
        ],
        [
            'name' => 'Achilles Tendon Injury',
            'type' => 'Follow-up Care',
            'description' => 'Proper follow-up care is essential for recovery from Achilles tendon injuries',
            'points' => [
                ['head' => 'Regular', 'point' => 'Physical therapy sessions'],
                ['head' => 'Gradual return', 'point' => 'To activities'],
                ['head' => 'Proper footwear', 'point' => 'And orthotics use'],
                ['head' => 'Regular', 'point' => 'Strength training exercises'],
                ['head' => 'Monitoring', 'point' => 'For re-injury signs']
            ]
        ]
    ];
@endphp

@foreach ($ailmentDetail as $detail)

    <section id="{{trim(str_replace(' ', '-', $detail['type']))}}" class="ailment-type-section">
        <div class="main-container">
            <h2 class="ailment-type heading">
                {{$detail['type']}} of {{$detail['name']}}
            </h2>
            <p>{{$detail['description']}}:</p>
            <ol>
                @foreach ($detail['points'] as $point)
                    <li>
                        <p>
                            <strong>{{ $point['head'] }}:</strong>
                            {{ $point['point'] }}
                        </p>
                    </li>

                @endforeach
            </ol>
        </div>
    </section>

@endforeach