<template>
    <div>
        <header class="vff-header">
            <div class="f-container">
                <!-- Add custom logo here -->
                <svg class="f-logo" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMid meet"
                     viewBox="0 0 35.606 11.211">
                    <path d="M.134.837H3.21V8.01h4.203v2.18H.134V.837z"/>
                    <path
                        d="M11.875.59c1.48 0 2.668.448 3.567 1.344s1.35 2.052 1.35 3.47c0 1.48-.445 2.7-1.336 3.632S13.38 10.45 11.9 10.45c-1.678 0-2.954-.54-3.827-1.622-.717-.9-1.08-2.022-1.09-3.397-.01-1.36.39-2.484 1.193-3.374C9.06 1.08 10.292.59 11.875.59zm0 2.283c-.563 0-1.003.222-1.323.662-.338.467-.507 1.124-.507 1.972 0 .865.162 1.524.487 1.978a1.58 1.58 0 0 0 1.369.682c.588 0 1.04-.223 1.355-.668s.474-1.07.474-1.875c0-1.834-.62-2.75-1.855-2.75z"/>
                    <path
                        d="M21.565 7.078V5.055h4.217v5.163h-1.986l-.13-.908c-.693.76-1.617 1.142-2.777 1.142-1.383 0-2.488-.437-3.313-1.3s-1.243-2.03-1.252-3.464c-.01-1.462.385-2.65 1.18-3.567.875-1.012 2.11-1.518 3.7-1.518 1.21 0 2.207.303 3 .907s1.264 1.457 1.447 2.556h-2.92c-.207-.787-.73-1.182-1.57-1.182-.553 0-.988.236-1.303.707s-.475 1.153-.475 2.043c0 1.695.652 2.542 1.96 2.542.363 0 .695-.103.998-.306a1.29 1.29 0 0 0 .572-.784h-1.35v.002z"/>
                    <path
                        d="M30.556.59c1.48 0 2.668.448 3.568 1.344s1.348 2.052 1.348 3.47c0 1.48-.443 2.7-1.336 3.632S32.06 10.45 30.58 10.45c-1.678 0-2.953-.54-3.826-1.622-.72-.892-1.082-2.022-1.1-3.398-.008-1.357.39-2.48 1.193-3.372C27.74 1.08 28.974.59 30.556.59zm0 2.283c-.563 0-1.002.222-1.322.662-.336.467-.506 1.125-.506 1.972 0 .865.162 1.524.486 1.978s.78.682 1.37.682 1.04-.223 1.355-.668.475-1.07.475-1.875c-.002-1.834-.62-2.75-1.857-2.75z"/>
                </svg>
            </div>
        </header>

        <flow-form
            ref="flowform"
            v-on:complete="onComplete"
            v-on:submit="onSubmit"
            v-bind:questions="questions"
            v-bind:language="language"
            v-bind:standalone="true"
        >
            <!-- Custom content for the Complete/Submit screen slots in the FlowForm component -->
            <!-- We've overriden the default "complete" slot content -->
            <template v-slot:complete>
                <div class="f-section-wrap">
                    <p>
                        <span class="fh2">Thank you. 🙏</span>
                        <span class="f-section-text">
              Great work, the survey is completed, and our demo is done. You can review your answers or press submit.
            </span>
                    </p>
                    <p class="f-description">Note: No data will be saved and/or sent in this demo.</p>
                </div>
            </template>

            <!-- We've overriden the default "completeButton" slot content -->
            <template v-slot:completeButton>
                <div class="f-submit" v-if="!submitted">
                    <button
                        class="o-btn-action"
                        ref="button"
                        type="submit"
                        href="#"
                        v-on:click.prevent="onSendData()"
                        aria-label="Press to submit"
                    >
                        <span>{{ language.submitText }}</span>
                    </button>
                    <a class="f-enter-desc"
                       href="#"
                       v-on:click.prevent="onSendData()"
                       v-html="language.formatString(language.pressEnter)">
                    </a>
                </div>

                <p class="text-success" v-if="submitted">Submitted succesfully.</p>
            </template>
        </flow-form>
    </div>
</template>

<script>
import FlowForm, {QuestionModel, QuestionType, ChoiceOption, LanguageModel} from '@ditdot-dev/vue-flow-form'

export default {
    name: 'FormCreate',
    components: {
        FlowForm
    },

    data() {
        return {
            submitted: false,
            completed: false,
            language: new LanguageModel(),
            // Create question list with QuestionModel instances
            questions: [
                new QuestionModel({
                    id: 'beginning',
                    tagline: 'Different types of questions influence how users interact with your forms',
                    title: 'What type of question?',
                    helpTextShow: false,
                    type: QuestionType.MultipleChoice,
                    multiple: false,
                    allowOther: false,
                    required: true,
                    options: [
                        new ChoiceOption({
                            label: 'Short Text (this works for most cases)',
                            value: 'short_text',
                        }),
                        new ChoiceOption({
                            label: 'Long Text',
                            value: 'long_text',
                        }),
                        new ChoiceOption({
                            label: 'Phone Number',
                            value: 'phone_number',
                        }),
                        new ChoiceOption({
                            label: 'Email',
                            value: 'email',
                        }),
                        new ChoiceOption({
                            label: 'Multiple Choice',
                            value: 'multiple_choice',
                        })
                    ],
                    jump: {
                        short_text: 'short_text',
                        long_text: 'long_text',
                        phone_number: 'phone_number',
                        email: 'email',
                        multiple_choice: 'multiple_choice',
                    }
                }),
                new QuestionModel({
                    id: 'short_text',
                    tagline: 'Alright! Let\'s get started!',
                    title: 'What is the question?',
                    type: QuestionType.Text,
                    required: true,
                    placeholder: 'eg: What is your name',
                    jump: {
                        _other: '_submit'
                    }
                }),
                new QuestionModel({
                    id: 'long_text',
                    tagline: 'Cool, let\'s write the question',
                    title: 'What is the question?',
                    type: QuestionType.Text,
                    required: true,
                    placeholder: 'eg: Anything else we should know?',
                    jump: {
                        _other: '_submit'
                    }
                }),
                new QuestionModel({
                    id: 'phone_number',
                    title: 'Awesome, almost done!',
                    content: 'We\'ll set this question up for you automatically.',
                    // description: 'Hit next.',
                    type: QuestionType.SectionBreak,
                    jump: {
                        _other: '_submit'
                    }
                }),
                new QuestionModel({
                    id: 'email',
                    title: 'Awesome, almost done!',
                    content: 'We\'ll set this question up for you automatically.',
                    // description: 'Hit next.',
                    type: QuestionType.SectionBreak,
                    jump: {
                        _other: '_submit'
                    }
                }),
                new QuestionModel({
                    id: 'multiple_choice',
                    title: 'Awesome, almost done!',
                    content: 'Okay, let\'s start with what you want to ask.',
                    type: QuestionType.SectionBreak,
                    jump: {
                        _other: 'mc_start'
                    }
                }),
                new QuestionModel({
                    id: 'mc_start',
                    // tagline: 'Okay, simple enough.',
                    title: 'What is the question?',
                    type: QuestionType.Text,
                    required: true,
                    placeholder: 'eg: What style of parking are you thinking about?',
                    jump: {
                        _other: 'mc_option_1'
                    }
                }),
                new QuestionModel({
                    id: 'mc_option_1',
                    tagline: 'Now let\'s add some options.',
                    title: 'What is the first option?',
                    type: QuestionType.Text,
                    required: true,
                    placeholder: 'eg: Garage parking, all the way.',
                    jump: {
                        _other: 'mc_option_2'
                    }
                }),
                new QuestionModel({
                    id: 'mc_option_2',
                    tagline: 'Maybe one more...',
                    title: 'What is the second option?',
                    type: QuestionType.Text,
                    required: true,
                    placeholder: 'eg: Driveway or bust',
                    jump: {
                        _other: '_submit'
                    }
                }),
            ]

        }
    },
    mounted() {
        document.addEventListener('keyup', this.onKeyListener)
    },
    beforeDestroy() {
        document.removeEventListener('keyup', this.onKeyListener)
    },
    methods: {
        onKeyListener($event) {
            // We've overriden the default "complete" slot so
            // we need to implement the "keyup" listener manually.
            if ($event.key === 'Enter' && this.completed && !this.submitted) {
                this.onSendData()
            }
        },
        /* eslint-disable-next-line no-unused-vars */
        onComplete(completed, questionList) {
            // This method is called whenever the "completed" status is changed.
            this.completed = completed
        },
        /* eslint-disable-next-line no-unused-vars */
        onSubmit(questionList) {
            // This method will only be called if you don't override the
            // completeButton slot.
            this.onSendData()
        },

        onSendData() {
            // Set `submitted` to true so the form knows not to allow back/forward
            // navigation anymore.
            this.$refs.flowform.submitted = true
            this.submitted = true
            /* eslint-disable-next-line no-unused-vars */
            const data = this.getData()
            console.log(data);
            /*
              You can use Fetch API to send the data to your server, eg.:
              fetch(url, {
                method: 'POST',
                headers: {
                  'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
              })
            */
        },
        getData() {
            const data = {
                questions: [],
                answers: []
            }
            this.questions.forEach(question => {
                if (question.title) {
                    let answer = question.answer
                    if (Array.isArray(answer)) {
                        answer = answer.join(', ')
                    }
                    data.questions.push(question.title)
                    data.answers.push(answer)
                }
            })
            return data
        }
    },
}
</script>

<style lang="css">
@import '~@ditdot-dev/vue-flow-form/dist/vue-flow-form.css';
@import '../../../js/amaan-flpw-form.light-minimal.css';
</style>
